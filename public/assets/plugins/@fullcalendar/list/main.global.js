/*!
FullCalendar v5.6.0
Docs & License: https://fullcalendar.io/
(c) 2020 Adam Shaw
*/
var FullCalendarList = (function (exports, common) {
    'use strict';

    /*! *****************************************************************************
    Copyright (c) Microsoft Corporation.

    Permission to use, copy, modify, and/or distribute this software for any
    purpose with or without fee is hereby granted.

    THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
    REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY
    AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
    INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM
    LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR
    OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
    PERFORMANCE OF THIS SOFTWARE.
    ***************************************************************************** */
    /* global Reflect, Promise */

    var extendStatics = function(d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };

    function __extends(d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    }

    var __assign = function() {
        __assign = Object.assign || function __assign(t) {
            for (var s, i = 1, n = arguments.length; i < n; i++) {
                s = arguments[i];
                for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p)) t[p] = s[p];
            }
            return t;
        };
        return __assign.apply(this, arguments);
    };

    var ListViewHeaderRow = /** @class */ (function (_super) {
        __extends(ListViewHeaderRow, _super);
        function ListViewHeaderRow() {
            return _super !== null && _super.apply(this, arguments) || this;
        }
        ListViewHeaderRow.prototype.render = function () {
            var _a = this.props, dayDate = _a.dayDate, todayRange = _a.todayRange;
            var _b = this.context, theme = _b.theme, dateEnv = _b.dateEnv, options = _b.options, viewApi = _b.viewApi;
            var dayMeta = common.getDateMeta(dayDate, todayRange);
            // will ever be falsy?
            var text = options.listDayFormat ? dateEnv.format(dayDate, options.listDayFormat) : '';
            // will ever be falsy? also, BAD NAME "alt"
            var sideText = options.listDaySideFormat ? dateEnv.format(dayDate, options.listDaySideFormat) : '';
            var navLinkData = options.navLinks
                ? common.buildNavLinkData(dayDate)
                : null;
            var hookProps = __assign({ date: dateEnv.toDate(dayDate), view: viewApi, text: text,
                sideText: sideText,
                navLinkData: navLinkData }, dayMeta);
            var classNames = ['fc-list-day'].concat(common.getDayClassNames(dayMeta, theme));
            // TODO: make a reusable HOC for dayHeader (used in daygrid/timegrid too)
            return (common.createElement(common.RenderHook, { hookProps: hookProps, classNames: options.dayHeaderClassNames, content: options.dayHeaderContent, defaultContent: renderInnerContent, didMount: options.dayHeaderDidMount, willUnmount: options.dayHeaderWillUnmount }, function (rootElRef, customClassNames, innerElRef, innerContent) { return (common.createElement("tr", { ref: rootElRef, className: classNames.concat(customClassNames).join(' '), "data-date": common.formatDayString(dayDate) },
                common.createElement("th", { colSpan: 3 },
                    common.createElement("div", { className: 'fc-list-day-cushion ' + theme.getClass('tableCellShaded'), ref: innerElRef }, innerContent)))); }));
        };
        return ListViewHeaderRow;
    }(common.BaseComponent));
    function renderInnerContent(props) {
        var navLinkAttrs = props.navLinkData // is there a type for this?
            ? { 'data-navlink': props.navLinkData, tabIndex: 0 }
            : {};
        return (common.createElement(common.Fragment, null,
            props.text && (common.createElement("a", __assign({ className: "fc-list-day-text" }, navLinkAttrs), props.text)),
            props.sideText && (common.createElement("a", __assign({ className: "fc-list-day-side-text" }, navLinkAttrs), props.sideText))));
    }

    var DEFAULT_TIME_FORMAT = common.createFormatter({
        hour: 'numeric',
        minute: '2-digit',
        meridiem: 'short',
    });
    var ListViewEventRow = /** @class */ (function (_super) {
        __extends(ListViewEventRow, _super);
        function ListViewEventRow() {
            return _super !== null && _super.apply(this, arguments) || this;
        }
        ListViewEventRow.prototype.render = function () {
            var _a = this, props = _a.props, context = _a.context;
            var seg = props.seg;
            var timeFormat = context.options.eventTimeFormat || DEFAULT_TIME_FORMAT;
            return (common.createElement(common.EventRoot, { seg: seg, timeText: "" // BAD. because of all-day content
                , disableDragging: true, disableResizing: true, defaultContent: renderEventInnerContent, isPast: props.isPast, isFuture: props.isFuture, isToday: props.isToday, isSelected: props.isSelected, isDragging: props.isDragging, isResizing: props.isResizing, isDateSelecting: props.isDateSelecting }, function (rootElRef, classNames, innerElRef, innerContent, hookProps) { return (common.createElement("tr", { className: ['fc-list-event', hookProps.event.url ? 'fc-event-forced-url' : ''].concat(classNames).join(' '), ref: rootElRef },
                buildTimeContent(seg, timeFormat, context),
                common.createElement("td", { className: "fc-list-event-graphic" },
                    common.createElement("span", { className: "fc-list-event-dot", style: { borderColor: hookProps.borderColor || hookProps.backgroundColor } })),
                common.createElement("td", { className: "fc-list-event-title", ref: innerElRef }, innerContent))); }));
        };
        return ListViewEventRow;
    }(common.BaseComponent));
    function renderEventInnerContent(props) {
        var event = props.event;
        var url = event.url;
        var anchorAttrs = url ? { href: url } : {};
        return (common.createElement("a", __assign({}, anchorAttrs), event.title));
    }
    function buildTimeContent(seg, timeFormat, context) {
        var options = context.options;
        if (options.displayEventTime !== false) {
            var eventDef = seg.eventRange.def;
            var eventInstance = seg.eventRange.instance;
            var doAllDay = false;
            var timeText = void 0;
            if (eventDef.allDay) {
                doAllDay = true;
            }
            else if (common.isMultiDayRange(seg.eventRange.range)) { // TODO: use (!isStart || !isEnd) instead?
                if (seg.isStart) {
                    timeText = common.buildSegTimeText(seg, timeFormat, context, null, null, eventInstance.range.start, seg.end);
                }
                else if (seg.isEnd) {
                    timeText = common.buildSegTimeText(seg, timeFormat, context, null, null, seg.start, eventInstance.range.end);
                }
                else {
                    doAllDay = true;
                }
            }
            else {
                timeText = common.buildSegTimeText(seg, timeFormat, context);
            }
            if (doAllDay) {
                var hookProps = {
                    text: context.options.allDayText,
                    view: context.viewApi,
                };
                return (common.createElement(common.RenderHook, { hookProps: hookProps, classNames: options.allDayClassNames, content: options.allDayContent, defaultContent: renderAllDayInner, didMount: options.allDayDidMount, willUnmount: options.allDayWillUnmount }, function (rootElRef, classNames, innerElRef, innerContent) { return (common.createElement("td", { className: ['fc-list-event-time'].concat(classNames).join(' '), ref: rootElRef }, innerContent)); }));
            }
            return (common.createElement("td", { className: "fc-list-event-time" }, timeText));
        }
        return null;
    }
    function renderAllDayInner(hookProps) {
        return hookProps.text;
    }

    /*
    Responsible for the scroller, and forwarding event-related actions into the "grid".
    */
    var ListView = /** @class */ (function (_super) {
        __extends(ListView, _super);
        function ListView() {
            var _this = _super !== null && _super.apply(this, arguments) || this;
            _this.computeDateVars = common.memoize(computeDateVars);
            _this.eventStoreToSegs = common.memoize(_this._eventStoreToSegs);
            _this.setRootEl = function (rootEl) {
                if (rootEl) {
                    _this.context.registerInteractiveComponent(_this, {
                        el: rootEl,
                    });
                }
                else {
                    _this.context.unregisterInteractiveComponent(_this);
                }
            };
            return _this;
        }
        ListView.prototype.render = function () {
            var _this = this;
            var _a = this, props = _a.props, context = _a.context;
            var extraClassNames = [
                'fc-list',
                context.theme.getClass('table'),
                context.options.stickyHeaderDates !== false ? 'fc-list-sticky' : '',
            ];
            var _b = this.computeDateVars(props.dateProfile), dayDates = _b.dayDates, dayRanges = _b.dayRanges;
            var eventSegs = this.eventStoreToSegs(props.eventStore, props.eventUiBases, dayRanges);
            return (common.createElement(common.ViewRoot, { viewSpec: context.viewSpec, elRef: this.setRootEl }, function (rootElRef, classNames) { return (common.createElement("div", { ref: rootElRef, className: extraClassNames.concat(classNames).join(' ') },
                common.createElement(common.Scroller, { liquid: !props.isHeightAuto, overflowX: props.isHeightAuto ? 'visible' : 'hidden', overflowY: props.isHeightAuto ? 'visible' : 'auto' }, eventSegs.length > 0 ?
                    _this.renderSegList(eventSegs, dayDates) :
                    _this.renderEmptyMessage()))); }));
        };
        ListView.prototype.renderEmptyMessage = function () {
            var _a = this.context, options = _a.options, viewApi = _a.viewApi;
            var hookProps = {
                text: options.noEventsText,
                view: viewApi,
            };
            return (common.createElement(common.RenderHook, { hookProps: hookProps, classNames: options.noEventsClassNames, content: options.noEventsContent, defaultContent: renderNoEventsInner, didMount: options.noEventsDidMount, willUnmount: options.noEventsWillUnmount }, function (rootElRef, classNames, innerElRef, innerContent) { return (common.createElement("div", { className: ['fc-list-empty'].concat(classNames).join(' '), ref: rootElRef },
                common.createElement("div", { className: "fc-list-empty-cushion", ref: innerElRef }, innerContent))); }));
        };
        ListView.prototype.renderSegList = function (allSegs, dayDates) {
            var _a = this.context, theme = _a.theme, options = _a.options;
            var segsByDay = groupSegsByDay(allSegs); // sparse array
            return (common.createElement(common.NowTimer, { unit: "day" }, function (nowDate, todayRange) {
                var innerNodes = [];
                for (var dayIndex = 0; dayIndex < segsByDay.length; dayIndex += 1) {
                    var daySegs = segsByDay[dayIndex];
                    if (daySegs) { // sparse array, so might be undefined
                        var dayStr = dayDates[dayIndex].toISOString();
                        // append a day header
                        innerNodes.push(common.createElement(ListViewHeaderRow, { key: dayStr, dayDate: dayDates[dayIndex], todayRange: todayRange }));
                        daySegs = common.sortEventSegs(daySegs, options.eventOrder);
                        for (var _i = 0, daySegs_1 = daySegs; _i < daySegs_1.length; _i++) {
                            var seg = daySegs_1[_i];
                            innerNodes.push(common.createElement(ListViewEventRow, __assign({ key: dayStr + ':' + seg.eventRange.instance.instanceId /* are multiple segs for an instanceId */, seg: seg, isDragging: false, isResizing: false, isDateSelecting: false, isSelected: false }, common.getSegMeta(seg, todayRange, nowDate))));
                        }
                    }
                }
                return (common.createElement("table", { className: 'fc-list-table ' + theme.getClass('table') },
                    common.createElement("tbody", null, innerNodes)));
            }));
        };
        ListView.prototype._eventStoreToSegs = function (eventStore, eventUiBases, dayRanges) {
            return this.eventRangesToSegs(common.sliceEventStore(eventStore, eventUiBases, this.props.dateProfile.activeRange, this.context.options.nextDayThreshold).fg, dayRanges);
        };
        ListView.prototype.eventRangesToSegs = function (eventRanges, dayRanges) {
            var segs = [];
            for (var _i = 0, eventRanges_1 = eventRanges; _i < eventRanges_1.length; _i++) {
                var eventRange = eventRanges_1[_i];
                segs.push.apply(segs, this.eventRangeToSegs(eventRange, dayRanges));
            }
            return segs;
        };
        ListView.prototype.eventRangeToSegs = function (eventRange, dayRanges) {
            var dateEnv = this.context.dateEnv;
            var nextDayThreshold = this.context.options.nextDayThreshold;
            var range = eventRange.range;
            var allDay = eventRange.def.allDay;
            var dayIndex;
            var segRange;
            var seg;
            var segs = [];
            for (dayIndex = 0; dayIndex < dayRanges.length; dayIndex += 1) {
                segRange = common.intersectRanges(range, dayRanges[dayIndex]);
                if (segRange) {
                    seg = {
                        component: this,
                        eventRange: eventRange,
                        start: segRange.start,
                        end: segRange.end,
                        isStart: eventRange.isStart && segRange.start.valueOf() === range.start.valueOf(),
                        isEnd: eventRange.isEnd && segRange.end.valueOf() === range.end.valueOf(),
                        dayIndex: dayIndex,
                    };
                    segs.push(seg);
                    // detect when range won't go fully into the next day,
                    // and mutate the latest seg to the be the end.
                    if (!seg.isEnd && !allDay &&
                        dayIndex + 1 < dayRanges.length &&
                        range.end <
                            dateEnv.add(dayRanges[dayIndex + 1].start, nextDayThreshold)) {
                        seg.end = range.end;
                        seg.isEnd = true;
                        break;
                    }
                }
            }
            return segs;
        };
        return ListView;
    }(common.DateComponent));
    function renderNoEventsInner(hookProps) {
        return hookProps.text;
    }
    function computeDateVars(dateProfile) {
        var dayStart = common.startOfDay(dateProfile.renderRange.start);
        var viewEnd = dateProfile.renderRange.end;
        var dayDates = [];
        var dayRanges = [];
        while (dayStart < viewEnd) {
            dayDates.push(dayStart);
            dayRanges.push({
                start: dayStart,
                end: common.addDays(dayStart, 1),
            });
            dayStart = common.addDays(dayStart, 1);
        }
        return { dayDates: dayDates, dayRanges: dayRanges };
    }
    // Returns a sparse array of arrays, segs grouped by their dayIndex
    function groupSegsByDay(segs) {
        var segsByDay = []; // sparse array
        var i;
        var seg;
        for (i = 0; i < segs.length; i += 1) {
            seg = segs[i];
            (segsByDay[seg.dayIndex] || (segsByDay[seg.dayIndex] = []))
                .push(seg);
        }
        return segsByDay;
    }

    var OPTION_REFINERS = {
        listDayFormat: createFalsableFormatter,
        listDaySideFormat: createFalsableFormatter,
        noEventsClassNames: common.identity,
        noEventsContent: common.identity,
        noEventsDidMount: common.identity,
        noEventsWillUnmount: common.identity,
    };
    function createFalsableFormatter(input) {
        return input === false ? null : common.createFormatter(input);
    }

    var plugin = common.createPlugin({
        optionRefiners: OPTION_REFINERS,
        views: {
            list: {
                component: ListView,
                buttonTextKey: 'list',
                listDayFormat: { month: 'long', day: 'numeric', year: 'numeric' },
            },
            listDay: {
                type: 'list',
                duration: { days: 1 },
                listDayFormat: { weekday: 'long' },
            },
            listWeek: {
                type: 'list',
                duration: { weeks: 1 },
                listDayFormat: { weekday: 'long' },
                listDaySideFormat: { month: 'long', day: 'numeric', year: 'numeric' },
            },
            listMonth: {
                type: 'list',
                duration: { month: 1 },
                listDaySideFormat: { weekday: 'long' },
            },
            listYear: {
                type: 'list',
                duration: { year: 1 },
                listDaySideFormat: { weekday: 'long' },
            },
        },
    });

    common.globalPlugins.push(plugin);

    exports.ListView = ListView;
    exports.default = plugin;

    Object.defineProperty(exports, '__esModule', { value: true });

    return exports;

}({}, FullCalendar));
