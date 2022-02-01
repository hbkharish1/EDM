<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Questionnaire;
use Excel;
use App\Imports\QuestionnairesImport;
use App\Imports\MezzImport;
use App\Exports\QuestionnaireExport;
use App\Exports\MezzExport;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request)
    {
        // $input = $request->file('import')->store('files');;
        // $filename = $input->getClientOriginalName();
        $sql = public_path('MYDATA.sql');
          //dd($sql);
        $db = [
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE')
        ];
        
        exec("mysql --user={$db['username']} --password={$db['password']} --host={$db['host']} --database {$db['database']} < $sql");
        
        \Log::info('SQL Import Done');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function download(){

        Artisan::call('backup:run');
        $path = storage_path('app/laravel-backup/*');
        $latest_ctime = 0;
        $latest_filename = '';
        $files = glob($path);
        foreach($files as $file)
        {
                if (is_file($file) && filectime($file) > $latest_ctime)
                {
                        $latest_ctime = filectime($file);
                        $latest_filename = $file;
                }
        }
        return response()->download($latest_filename);
    }
   public function our_backup_database()
   {
       //ENTER THE RELEVANT INFO BELOW
       $mysqlHostName      = env('DB_HOST');
       $mysqlUserName      = env('DB_USERNAME');
       $mysqlPassword      = env('DB_PASSWORD');
       $DbName             = env('DB_DATABASE');
       $file_name = 'database_backup_on_' . date('y-m-d') . '.sql';


       $queryTables = \DB::select(\DB::raw('SHOW TABLES'));
        foreach ( $queryTables as $table )
        {
            foreach ( $table as $tName)
            {
                $tables[]= $tName ;
            }
        }
      // $tables  = array("users","products","categories"); //here your tables...

       $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
       $get_all_table_query = "SHOW TABLES";
       $statement = $connect->prepare($get_all_table_query);
       $statement->execute();
       $result = $statement->fetchAll();
       $output = '';
       foreach($tables as $table)
       {
           $show_table_query = "SHOW CREATE TABLE " . $table . "";
           $statement = $connect->prepare($show_table_query);
           $statement->execute();
           $show_table_result = $statement->fetchAll();

           foreach($show_table_result as $show_table_row)
           {
               $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
           }
           $select_query = "SELECT * FROM " . $table . "";
           $statement = $connect->prepare($select_query);
           $statement->execute();
           $total_row = $statement->rowCount();

           for($count=0; $count<$total_row; $count++)
           {
               $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
               $table_column_array = array_keys($single_result);
               $table_value_array = array_values($single_result);
               $output .= "\nINSERT INTO $table (";
               $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
               $output .= "'" . implode("','", $table_value_array) . "');\n";
           }
       }

       $file_handle = fopen($file_name, 'w+');
       fwrite($file_handle, $output);
       fclose($file_handle);
       header('Content-Description: File Transfer');
       header('Content-Type: application/octet-stream');
       header('Content-Disposition: attachment; filename=' . basename($file_name));
       header('Content-Transfer-Encoding: binary');
       header('Expires: 0');
       header('Cache-Control: must-revalidate');
       header('Pragma: public');
       header('Content-Length: ' . filesize($file_name));
       ob_clean();
       flush();
       readfile($file_name);
       unlink($file_name);
   }

    public function uploadExcel(Request $request){
        if (!$request->hasFile('file1')) {
            return redirect()->back()->with("error","Please select a file to upload.");
        }
        
        $validator = Validator::make(
            [
                'file'      => $request->file1,
                'extension' => strtolower($request->file1->getClientOriginalExtension()),
            ],
            [
                'file'          => 'required',
                'extension'      => 'required|in:csv,xlsx',
            ]
          );

        if ($validator->fails()) {
            $validator->getMessageBag(); 
            return redirect()->back()->with("error","Unsupported File Format, please select .xlsx or .csv file");
        }
        Excel::import(new QuestionnairesImport, $request->file1);
        return redirect()->back()->with("success","Data Uploaded Successfully.");
    }

    public function uploadMezzExcel(Request $request){
        if (!$request->hasFile('file1')) {
            return redirect()->back()->with("error","Please select a file to upload.");
        }
        
        $validator = Validator::make(
            [
                'file'      => $request->file1,
                'extension' => strtolower($request->file1->getClientOriginalExtension()),
            ],
            [
                'file'          => 'required',
                'extension'      => 'required|in:csv,xlsx',
            ]
          );

        if ($validator->fails()) {
            $validator->getMessageBag(); 
            return redirect()->back()->with("error","Unsupported File Format, please select .xlsx or .csv file");
        }
        Excel::import(new MezzImport, $request->file1);
        return redirect()->back()->with("success","Data Uploaded Successfully.");
    }

    public function exportMezz() 
    {
        return Excel::download(new MezzExport, 'Mezz.xlsx');
    }

    public function exportQuestionnaire() 
    {
        return Excel::download(new QuestionnaireExport, 'Questionnaire.xlsx');
    }
}
