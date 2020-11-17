function toggle()
{
    const videoTopic1 = document.querySelector(".videoTopic1");
    const video1 = document.querySelector(".videoTopic1 video");
    videoTopic1.classList.toggle("active")
    video1.pause();
    video1.currentTime=0;
}

function toggle2()
{
    const videoTopic2 = document.querySelector(".videoTopic2");
    const video2 = document.querySelector(".videoTopic2 video");
    videoTopic2.classList.toggle("active");
    video2.pause();
    video2.currentTime=0;
}

function toggle3()
{
    const videoTopic3 = document.querySelector(".videoTopic3");
    const video3 = document.querySelector(".videoTopic3 video");
    videoTopic3.classList.toggle("active");
    video3.pause();
    video3.currentTime=0;
    if(audio.paused)
        audio.play();
    else
        audio.pause();
}

let imageTracker = 'b1';
const text = "Image not found";
function change()
{
    const image = document.getElementById('Bubble1');
    switch(imageTracker){
        case "b1":
            image.src='res/bubble2.jpg';
            imageTracker='b2';
            break;
        case "b2":
            image.src='res/bubble3.jpg';
            imageTracker='b3';
            break;
        case "b3":
            image.src='res/bubble1.jpg';
            imageTracker='b1';
            break;
        default:
            document.writeln(text);
    }
}

let imageTracker2 = 's1';
function change2()
{
    const image = document.getElementById('Selection1');
    switch(imageTracker2){
        case "s1":
            image.src='res/select2.jpg';
            imageTracker2='s2';
            break;
        case "s2":
            image.src='res/select3.jpg';
            imageTracker2='s3';
            break;
        case "s3":
            image.src='res/select1.jpg';
            imageTracker2='s1';
            break;
        default:
            document.writeln(text);
    }
}

let imageTracker3 = 'i1';
function change3()
{
    const image = document.getElementById('Insertion1');
    switch(imageTracker3){
        case "i1":
            image.src='res/insertion2.jpg';
            imageTracker3='i2';
            break;
        case "i2":
            image.src='res/insertion3.jpg';
            imageTracker3='i3';
            break;
        case "i3":
            image.src='res/insertion4.jpg';
            imageTracker3='i4';
            break;
        case "i4":
            image.src='res/insertion5.jpg';
            imageTracker3='i5';
            break;
        case "i5":
            image.src='res/insertion6.jpg';
            imageTracker3='i6';
            break;
        case "i6":
            image.src='res/insertion1.jpg';
            imageTracker3='i1';
            break;
        default:
            document.writeln(text);
    }
}

!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define("lazy-line-painter",[],e):"object"==typeof exports?exports["lazy-line-painter"]=e():t["lazy-line-painter"]=e()}(window,function(){return function(t){var e={};function i(n){if(e[n])return e[n].exports;var s=e[n]={i:n,l:!1,exports:{}};return t[n].call(s.exports,s,s.exports,i),s.l=!0,s.exports}return i.m=t,i.c=e,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var s in t)i.d(n,s,function(e){return t[e]}.bind(null,s));return n},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="",i(i.s=2)}([function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n={easeLinear:function(t){return t},easeInQuad:function(t){return t*t},easeOutQuad:function(t){return t*(2-t)},easeInOutQuad:function(t){return(t*=2)<1?.5*t*t:-.5*(--t*(t-2)-1)},easeInCubic:function(t){return t*t*t},easeOutCubic:function(t){return--t*t*t+1},easeInOutCubic:function(t){return(t*=2)<1?.5*t*t*t:.5*((t-=2)*t*t+2)},easeInQuart:function(t){return t*t*t*t},easeOutQuart:function(t){return 1- --t*t*t*t},easeInOutQuart:function(t){return(t*=2)<1?.5*t*t*t*t:-.5*((t-=2)*t*t*t-2)},easeInQuint:function(t){return t*t*t*t*t},easeOutQuint:function(t){return--t*t*t*t*t+1},easeInOutQuint:function(t){return(t*=2)<1?.5*t*t*t*t*t:.5*((t-=2)*t*t*t*t+2)},easeInSine:function(t){return 1-Math.cos(t*Math.PI/2)},easeOutSine:function(t){return Math.sin(t*Math.PI/2)},easeInOutSine:function(t){return.5*(1-Math.cos(Math.PI*t))},easeInExpo:function(t){return 0===t?0:Math.pow(1024,t-1)},easeOutExpo:function(t){return 1===t?t:1-Math.pow(2,-10*t)},easeInOutExpo:function(t){return 0===t?0:1===t?1:(t*=2)<1?.5*Math.pow(1024,t-1):.5*(2-Math.pow(2,-10*(t-1)))},easeInCirc:function(t){return 1-Math.sqrt(1-t*t)},easeOutCirc:function(t){return Math.sqrt(1- --t*t)},easeInOutCirc:function(t){return(t*=2)<1?-.5*(Math.sqrt(1-t*t)-1):.5*(Math.sqrt(1-(t-=2)*t)+1)},easeInBounce:function(t){return 1-this.easeOutBounce(1-t)},easeOutBounce:function(t){return t<1/2.75?7.5625*t*t:t<2/2.75?7.5625*(t-=1.5/2.75)*t+.75:t<2.5/2.75?7.5625*(t-=2.25/2.75)*t+.9375:7.5625*(t-=2.625/2.75)*t+.984375},easeInOutBounce:function(t){return t<.5?.5*this.easeInBounce(2*t):.5*this.easeOutBounce(2*t-1)+.5}};e.default=n,t.exports=e.default},function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n={on:function(t,e){this._eventEmitterCallbacks=this._eventEmitterCallbacks||{},this._eventEmitterCallbacks[t]=this._eventEmitterCallbacks[t]||[],this._eventEmitterCallbacks[t].push(e)}};n.addListener=n.on,n.off=function(t,e){if(this._eventEmitterCallbacks=this._eventEmitterCallbacks||{},t in this._eventEmitterCallbacks){var i=this._eventEmitterCallbacks[t].indexOf(e);i<0||this._eventEmitterCallbacks[t].splice(i,1)}},n.removeListener=n.off,n.emit=function(t,e){if(this._eventEmitterCallbacks=this._eventEmitterCallbacks||{},t in this._eventEmitterCallbacks){var i=!0,n=!1,s=void 0;try{for(var r,a=this._eventEmitterCallbacks[t][Symbol.iterator]();!(i=(r=a.next()).done);i=!0){var o=r.value;if("function"!=typeof o)return;o(e)}}catch(t){n=!0,s=t}finally{try{i||null==a.return||a.return()}finally{if(n)throw s}}}},n.trigger=n.emit;var s=n;e.default=s,t.exports=e.default},function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n=r(i(1)),s=r(i(0));function r(t){return t&&t.__esModule?t:{default:t}}function a(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}var o=function(){function t(e,i){var s=this;!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),function(t,e,i){e in t?Object.defineProperty(t,e,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[e]=i}(this,"_onVisibilityChange",function(){document.hidden?s.pause():s.resume()}),this.el=e,this.el.classList.add("lazy-line-painter"),this.config=Object.assign({strokeWidth:null,strokeDash:null,strokeColor:null,strokeOverColor:null,strokeCap:null,strokeJoin:null,strokeOpacity:null,delay:0,ease:null,drawSequential:!1,speedMultiplier:1,reverse:!1,paused:!1,progress:0,repeat:0,longestDuration:0,log:!0,offset:this.el.getBoundingClientRect()},i,{}),Object.assign(this,n.default,{}),this.__raf=null,this.__paths=[],this._generatePaths(),this._parseDataAttrs(),this._updateDuration(),this._setupPaths(),document.addEventListener("visibilitychange",this._onVisibilityChange)}return function(t,e,i){e&&a(t.prototype,e),i&&a(t,i)}(t,[{key:"_generatePaths",value:function(){var t;t=Boolean(this.el.dataset.llpComposed)?this.el.querySelectorAll("[data-llp-id]"):this._uncomposed();for(var e=0;e<t.length;e++){var i={el:t[e]};this.__paths.push(i)}}},{key:"_uncomposed",value:function(){var t,e=this.el.querySelectorAll("path, polygon, circle, ellipse, polyline, line, rect");for(t=0;t<e.length;t++){var i=this.el.id.replace(/ /g,"");i=(i=i.replace(".","")).replace("-",""),e[t].dataset.llpId=i+"-"+t,e[t].dataset.llpDuration||(e[t].dataset.llpDuration=1e3),e[t].dataset.llpDuration||(e[t].dataset.llpDelay=0)}return this.config.log&&console.log("This lazy line is uncomposed! Visit http://lazylinepainter.info to compose your masterpiece!"),e}},{key:"paint",value:function(t){Object.assign(this.config,t),this._updateDuration(),this.erase(),this._paint(),this.emit("start")}},{key:"pause",value:function(){this.config&&(this.config.paused=!0),cancelAnimationFrame(this.__raf),this.emit("pause")}},{key:"resume",value:function(){var t=this;this.config&&this.config.paused&&(requestAnimationFrame(function(){t.adjustStartTime()}),this.config.paused=!1,this.emit("resume"))}},{key:"erase",value:function(){this.config.startTime=null,this.config.elapsedTime=null,cancelAnimationFrame(this.__raf),this.config.onStrokeCompleteDone=!1,this.config.paused=!1;for(var t=0;t<this.__paths.length;t++){var e=this.__paths[t];e.el.style.strokeDashoffset=e.length,e.onStrokeCompleteDone=!1,e.onStrokeStartDone=!1}this.emit("erase")}},{key:"destroy",value:function(){this.config=null,this.el.remove(),this.el=null}},{key:"set",value:function(t,e){switch(t){case"progress":this._setProgress(e);break;case"delay":this._setDelay(e);break;case"reverse":this._setReverse(e);break;case"ease":this._setEase(e);break;case"repeat":this._setRepeat(e);break;default:this.config.log&&console.log("property "+t+" can not be set")}}},{key:"_setRepeat",value:function(t){this.config.repeat=t}},{key:"_setEase",value:function(t){this.config.ease=t}},{key:"_setProgress",value:function(t){this.pause(),this.config.progress=this._getProgress(t,this.config.ease),this._updatePaths(),this.config.elapsedTime=this.config.progress*this.config.totalDuration}},{key:"_setDelay",value:function(t){this.config.delay=t,this._updateDuration()}},{key:"_setReverse",value:function(t){this.config.reverse=t,this._updateDuration()}},{key:"_updateDuration",value:function(){var t=this._getTotalDuration(),e=this._getLongestDuration();this.config.totalDuration=this.config.drawSequential?t:e,this.config.totalDuration+=this.config.delay,this._calcPathDurations()}},{key:"_calcPathDurations",value:function(){for(var t=0;t<this.__paths.length;t++){var e=this.__paths[t],i=void 0;e.progress=0,i=this.config.reverse?this.config.drawSequential?0:this.config.totalDuration-(e.delay+e.duration):this.config.drawSequential?0:this.config.delay+e.delay,e.startTime=i,e.startProgress=e.startTime/this.config.totalDuration,e.durationProgress=e.duration/this.config.totalDuration}}},{key:"get",value:function(){return this.config}},{key:"resize",value:function(){this.config.offset=this.el.getBoundingClientRect();for(var t=0;t<this.__paths.length;t++){var e=this.__paths[t];e.el.getBoundingClientRect(),e.positions=this._getPathPoints(e.el,e.length),this._updatePosition(e)}}},{key:"_parseDataAttrs",value:function(){for(var t=0;t<this.__paths.length;t++){var e=this.__paths[t];e.id=e.el.dataset.llpId,e.delay=Number(e.el.dataset.llpDelay)||0,e.duration=Number(e.el.dataset.llpDuration)||0,e.reverse=Boolean(e.el.dataset.llpReverse)||!1,e.ease=Number(e.el.dataset.llpEase)||null,e.strokeDash=e.el.dataset.llpStrokeDash||null,e.delay*=this.config.speedMultiplier,e.duration*=this.config.speedMultiplier,this._setStyleAttrs(e)}}},{key:"_setStyleAttrs",value:function(t){t.strokeColor=t.el.dataset.llpStrokeColor||this.config.strokeColor,t.strokeColor&&(t.el.style.stroke=t.strokeColor),t.strokeOpacity=t.el.dataset.llpStrokeOpacity||this.config.strokeOpacity,t.strokeOpacity&&(t.el.style.strokeOpacity=t.strokeOpacity),t.strokeWidth=t.el.dataset.llpStrokeWidth||this.config.strokeWidth,t.strokeWidth&&(t.el.style.strokeWidth=t.strokeWidth),t.strokeCap=t.el.dataset.llpStrokeCap||this.config.strokeCap,t.strokeCap&&(t.el.style.strokeLinecap=t.strokeCap),t.strokeJoin=t.el.dataset.llpStrokeJoin||this.config.strokeJoin,t.strokeJoin&&(t.el.style.strokeLinejoin=t.strokeJoin)}},{key:"_setupPaths",value:function(){for(var t=0;t<this.__paths.length;t++){var e=this.__paths[t];e.index=t,e.length=this._getPathLength(e.el),e.positions=this._getPathPoints(e.el,e.length),e.el.style.strokeDasharray=this._getStrokeDashArray(e,e.length),e.el.style.strokeDashoffset=e.length,e.onStrokeStartDone=!1,e.onStrokeCompleteDone=!1}}},{key:"adjustStartTime",value:function(){var t=this,e=performance.now();this.config.startTime=e-this.config.elapsedTime,requestAnimationFrame(function(){t._paint()})}},{key:"_paint",value:function(){var t=this;if(this.config){this.config.startTime||(this.config.startTime=performance.now()),this.emit("update");var e=performance.now();this.config.elapsedTime=e-this.config.startTime,this.config.linearProgress=this.config.elapsedTime/this.config.totalDuration,this.config.progress=this._getProgress(this.config.linearProgress,this.config.ease),this._updatePaths(),this.config.linearProgress>=0&&this.config.linearProgress<=1?this.__raf=requestAnimationFrame(function(){t._paint()}):this.config.repeat>0?(this.config.repeat--,this.paint()):-1===this.config.repeat?this.paint():this.emit("complete")}}},{key:"_updatePaths",value:function(){for(var t=0;t<this.__paths.length;t++){var e=this.__paths[t],i=this._getElapsedProgress(e);e.progress=this._getProgress(i,e.ease),this._setLine(e),this._updatePosition(e),this._updateStrokeCallbacks(e)}}},{key:"_getElapsedProgress",value:function(t){var e;return this.config.progress>=t.startProgress&&this.config.progress<=t.startProgress+t.durationProgress?e=(this.config.progress-t.startProgress)/t.durationProgress:this.config.progress>=t.startProgress+t.durationProgress?e=1:this.config.progress<=t.startProgress&&(e=0),e}},{key:"_getProgress",value:function(t,e){var i=t;return e&&(i=s.default[e](t)),i}},{key:"_setLine",value:function(t){var e=t.el,i=t.progress*t.length;t.reverse?e.style.strokeDashoffset=-t.length+i:this.config.reverse?e.style.strokeDashoffset=-t.length+i:e.style.strokeDashoffset=t.length-i}},{key:"_updateStrokeCallbacks",value:function(t){1===t.progress?t.onStrokeCompleteDone||(t.onStrokeCompleteDone=!0,this.emit("complete:"+t.id,t),this.emit("complete:all",t)):t.progress>1e-5&&(t.onStrokeStartDone||(this.emit("start:"+t.id,t),this.emit("start:all",t),t.onStrokeStartDone=!0),this.emit("update:"+t.id,t),this.emit("update:all",t))}},{key:"_updatePosition",value:function(t){var e=Math.round(t.progress*(t.length-1)),i=t.positions[e];i&&(t.position={x:this.config.offset.left+i.x,y:this.config.offset.top+i.y})}},{key:"_getTotalDuration",value:function(){for(var t=0,e=this.__paths,i=0;i<e.length;i++){var n=e[i].delay||0;t+=e[i].duration+n}return t}},{key:"_getLongestDuration",value:function(){for(var t=0,e=this.__paths,i=0;i<e.length;i++){var n=e[i].delay+e[i].duration;n>t&&(t=n)}return t}},{key:"_getPathLength",value:function(t){return this._getTotalLength(t)}},{key:"_getDistance",value:function(t,e){return Math.sqrt(Math.pow(e.x-t.x,2)+Math.pow(e.y-t.y,2))}},{key:"_getCircleLength",value:function(t){return 2*Math.PI*t.getAttribute("r")}},{key:"_getEllipseLength",value:function(t){var e=parseInt(t.getAttribute("rx"),1),i=parseInt(t.getAttribute("ry"),1),n=Math.pow(e-i,2)/Math.pow(e+i,2);return Math.PI*(e+i)*(1+3*n/Math.sqrt(4-3*n))}},{key:"_getRectLength",value:function(t){return 2*t.getAttribute("width")+2*t.getAttribute("height")}},{key:"_getLineLength",value:function(t){return this._getDistance({x:t.getAttribute("x1"),y:t.getAttribute("y1")},{x:t.getAttribute("x2"),y:t.getAttribute("y2")})}},{key:"_getPolylineLength",value:function(t){for(var e,i=t.points,n=0,s=0;s<i.numberOfItems;s++){var r=i.getItem(s);s>0&&(n+=this._getDistance(e,r)),e=r}return n}},{key:"_getPolygonLength",value:function(t){var e=t.points;return this._getPolylineLength(t)+this._getDistance(e.getItem(e.numberOfItems-1),e.getItem(0))}},{key:"_getTotalLength",value:function(t){var e;switch(t.tagName.toLowerCase()){case"circle":e=this._getCircleLength(t);break;case"rect":e=this._getRectLength(t);break;case"line":e=this._getLineLength(t);break;case"polyline":e=this._getPolylineLength(t);break;case"polygon":e=this._getPolygonLength(t);break;default:e=t.getTotalLength()}return e}},{key:"_getPathPoints",value:function(t,e){for(var i=[],n=0;n<e;n++){var s=t.getPointAtLength(n);i.push({x:s.x,y:s.y})}return i}},{key:"_getStrokeDashArray",value:function(t,e){return t.strokeDash?this._getStrokeDashString(t.strokeDash,e):this.config.strokeDash?this._getStrokeDashString(this.config.strokeDash,e):e+" "+e}},{key:"_getStrokeDashString",value:function(t,e){for(var i,n,s="",r=t.split(","),a=0,o=r.length-1;o>=0;o--)a+=Number(r[o]);n=e-(i=Math.floor(e/a))*a;for(var l=0;l<i;l++)s+=t+", ";return(s+n+", "+(e+2)).split(",").join("px,")+"px"}}]),t}();window.LazyLinePainter=o;var l=o;e.default=l,t.exports=e.default}])});
//# sourceMappingURL=lazy-line-painter-1.9.6.min.js.map

function createVisualizer(num) {
    const visualizer = document.querySelector(".visualizer");

    // remove all children of visualizer if exists
    while (visualizer.firstChild) {
        visualizer.removeChild(visualizer.firstChild);
    }

    for (let i = 0; i < num; i += 1) {
        const value = Math.floor(Math.random() * 99 + 1);

        const block = document.createElement("div");
        block.classList.add("block");
        block.style.height = `${value * 3.5}px`;
        block.style.transform = `translateX(${i * 40}px)`;

        const blockLabel = document.createElement("label");
        blockLabel.classList.add("block-label");
        blockLabel.innerHTML = value;

        block.appendChild(blockLabel);
        visualizer.appendChild(block);
    }
}

function swap(element1, element2) // swap 2 blocks when sorting blocks
{
    return new Promise(resolve => {
        // exchange CSS styles of 2 blocks
        const style1 = window.getComputedStyle(element1);
        const style2 = window.getComputedStyle(element2);
        element1.style.transform = style2.getPropertyValue("transform");
        element2.style.transform = style1.getPropertyValue("transform");
        // make temporary copies to swap 2 blocks
        const clonedElement1 = element1.cloneNode(true);
        const clonedElement2 = element2.cloneNode(true);

        window.requestAnimationFrame(function() {
            setTimeout(() => {
                // swap 2 blocks by replacing each other
                element2.parentNode.replaceChild(clonedElement1, element2);
                element1.parentNode.replaceChild(clonedElement2, element1);
                resolve();
            }, 250);
        });
    });
}

async function bubbleSort() {
    let blocks = document.querySelectorAll(".block");

    for (let i = 0; i < blocks.length - 1; ++i) {
        for (let j = 0; j < blocks.length - i - 1; ++j) {
            blocks[j].style.backgroundColor = "#FF4949";
            blocks[j + 1].style.backgroundColor = "#FF4949";

            await new Promise(resolve => // wait for 0.1 seconds
                setTimeout(() => {
                    resolve();
                }, 100)
            );
            // obtain number values from blocks
            const value1 = Number(blocks[j].childNodes[0].innerHTML);
            const value2 = Number(blocks[j + 1].childNodes[0].innerHTML);

            if (value1 > value2) {
                await swap(blocks[j], blocks[j + 1]);
                blocks = document.querySelectorAll(".block");
            }
            blocks[j].style.backgroundColor = "#58B7FF";
            blocks[j + 1].style.backgroundColor = "#58B7FF";
        }
        blocks[blocks.length - i - 1].style.backgroundColor = "#13CE66";
    }
    blocks[0].style.backgroundColor = "#13CE66";
}

async function selectionSort() {
    let blocks = document.querySelectorAll(".block");

    for (let i = 0; i < blocks.length - 1; ++i) {
        let min = i;
        blocks[min].style.backgroundColor = "#FF8B1E";

        for (let j = i + 1; j < blocks.length; ++j) {
            blocks[j].style.backgroundColor = "#FF4949";

            await new Promise(resolve => // wait for 0.1 seconds
                setTimeout(() => {
                    resolve();
                }, 100)
            );
            // obtain number values from blocks
            const value1 = Number(blocks[j].childNodes[0].innerHTML);
            const value2 = Number(blocks[min].childNodes[0].innerHTML);

            if (value1 < value2) {
                blocks[min].style.backgroundColor = "#58B7FF";
                min = j;
            }
            blocks[j].style.backgroundColor = "#58B7FF";
            blocks[min].style.backgroundColor = "#FF8B1E";
        }
        if (i !== min) { // swap blocks only if they have different indices
            await swap(blocks[i], blocks[min]);
            blocks = document.querySelectorAll(".block");
        }
        blocks[i].style.backgroundColor = "#13CE66";
    }
    blocks[blocks.length - 1].style.backgroundColor = "#13CE66";
}

async function insertionSort() {
    let blocks = document.querySelectorAll(".block");

    for (let i = 1; i < blocks.length; ++i) {
        const key = Number(blocks[i].childNodes[0].innerHTML);
        let j = i - 1;

        while (j >= 0 && Number(blocks[j].childNodes[0].innerHTML) > key) {
            blocks[i].style.backgroundColor = "#13CE66";
            blocks[j].style.backgroundColor = "#FF4949";

            if (j + 1 !== i) // do not change colour for block with current index
                blocks[j + 1].style.backgroundColor = "#FF4949";

            await new Promise(resolve => // wait for 0.1 seconds
                setTimeout(() => {
                    resolve();
                }, 100)
            );
            await swap(blocks[j], blocks[j + 1]);
            blocks = document.querySelectorAll(".block");
            blocks[i].style.backgroundColor = "#13CE66";
            blocks[j].style.backgroundColor = "#58B7FF";

            if (j + 1 !== i) // do not change colour for block with current index
                blocks[j + 1].style.backgroundColor = "#58B7FF";

            j -= 1
        }
        blocks[i].style.backgroundColor = "#58B7FF";
    }
    // insertion sort completes, turn all blocks into green
    for (let i = 0; i < blocks.length; ++i) {
        blocks[i].style.backgroundColor = "#13CE66";
    }
}

function sortingVisualizer() { // run sorting visualization for different algorithms
    let blockNo = document.getElementById("blockNo").value;
    let sortingType = document.getElementById("sortingType").value;
    createVisualizer(blockNo);

    switch (sortingType) {
        case "Bubble Sort":
            bubbleSort();
            break;
        case "Selection Sort":
            selectionSort();
            break;
        case "Insertion Sort":
            insertionSort();
    }
}

const nextButtonA = document.getElementById("next-button-A");
const previousButtonA = document.getElementById("previous-button-A");
const choiceButtonsA = document.getElementById("choice-buttons-A");
const nextButtonB = document.getElementById("next-button-B");
const previousButtonB = document.getElementById("previous-button-B");
const choiceButtonsB = document.getElementById("choice-buttons-B");
let questionNoA, questionNoB;

const quizQuestionsA = [
    {
        title: "Question 1: Which of the following is not a binary tree traversal algorithm?",
        choices: [
            { text: "Inorder Traversal", correct: false },
            { text: "Preorder Traversal", correct: false },
            { text: "Outorder Traversal", correct: true },
            { text: "Postorder Traversal", correct: false }
        ]
    },
    {
        title: "Question 2: What happens if we try to insert a node that already exists in the binary tree?",
        choices: [
            { text: "The node will be deleted.", correct: false },
            { text: "The node will be inserted after deleted.", correct: false },
            { text: "A duplicate node will be inserted.", correct: false },
            { text: "Nothing happens.", correct: true }
        ]
    },
    {
        title: "Question 3: What is returned if a search is performed on a node that does not exist in the binary tree?",
        choices: [
            { text: "Nothing", correct: true },
            { text: "A random node", correct: false },
            { text: "The root", correct: false },
            { text: "The last node", correct: false }
        ]
    }
]

const quizQuestionsB = [
    {
        title: "Question 1: Which of the following graph type is not correct?",
        choices: [
            { text: "Mixed Graph", correct: false },
            { text: "Unmixed Graph", correct: true },
            { text: "Directed Graph", correct: false },
            { text: "Undirected Graph", correct: false }
        ]
    },
    {
        title: "Question 2: Which traversal algorithm implements a stack structure?",
        choices: [
            { text: "Breadth First Search", correct: false },
            { text: "Depth First Search", correct: true },
            { text: "Length First Search", correct: false },
            { text: "Width First Search", correct: false }
        ]
    },
    {
        title: "Question 3: Which of the following is not a property of graph?",
        choices: [
            { text: "Shortest Path", correct: false },
            { text: "Cycle", correct: false },
            { text: "Strong Connectivity", correct: false },
            { text: "Weak Connectivity", correct: true }
        ]
    }
]

nextButtonA.addEventListener("click", () => {
    ++questionNoA;
    anotherQuestion(quizQuestionsA, questionNoA, previousButtonA, nextButtonA, choiceButtonsA);
})

previousButtonA.addEventListener("click", () => {
    --questionNoA;
    anotherQuestion(quizQuestionsA, questionNoA, previousButtonA, nextButtonA, choiceButtonsA);
})

nextButtonB.addEventListener("click", () => {
    ++questionNoB;
    anotherQuestion(quizQuestionsB, questionNoB, previousButtonB, nextButtonB, choiceButtonsB);
})

previousButtonB.addEventListener("click", () => {
    --questionNoB;
    anotherQuestion(quizQuestionsB, questionNoB, previousButtonB, nextButtonB, choiceButtonsB);
})

$(document).ready(function() {
    questionNoA = questionNoB = 0;
    anotherQuestion(quizQuestionsA, questionNoA, previousButtonA, nextButtonA, choiceButtonsA);
    anotherQuestion(quizQuestionsB, questionNoB, previousButtonB, nextButtonB, choiceButtonsB);
    //animate();
    //setInterval(function() {animate()}, 6000);
});

function anotherQuestion(quizQuestions, questionNo, previousButton, nextButton, choiceButtons) {
    resetAnswerButtons(previousButton, nextButton, choiceButtons);
    showQuestion(quizQuestions, questionNo, previousButton, nextButton, choiceButtons);
}

function showQuestion(quizQuestions, questionNo, previousButton, nextButton, choiceButtons) {
    let questionSet;

    if (quizQuestions === quizQuestionsA)
        questionSet = "question-A";
    else
        questionSet = "question-B";

    document.getElementById(questionSet).innerText = quizQuestions[questionNo].title;

    quizQuestions[questionNo].choices.forEach(choice => {
        const qButton = document.createElement("qButton");
        qButton.innerText = choice.text;
        qButton.classList.add("quiz-button");

        if (choice.correct) {
            qButton.dataset.correct = choice.correct;
        }
        qButton.addEventListener("click", function() {
            const correct = qButton.dataset.correct;
            setAnswerButtons(document.body, correct);

            Array.from(choiceButtons.children).forEach(button => {
                setAnswerButtons(button, button.dataset.correct);
            })

            if (questionNo > 0) {
                previousButton.classList.remove("hide");
            }

            if (questionNo < quizQuestions.length - 1) {
                nextButton.classList.remove("hide");
            }
        });
        choiceButtons.appendChild(qButton);
    })
}

function resetAnswerButtons(previousButton, nextButton, choiceButtons) {
    clearAnswerButtons(document.body);
    previousButton.classList.add("hide");
    nextButton.classList.add("hide");

    while (choiceButtons.firstChild) {
        choiceButtons.removeChild(choiceButtons.firstChild);
    }
}

function setAnswerButtons(element, correct) {
    clearAnswerButtons(element);

    if (correct) {
        element.classList.add("correct");
    } else {
        element.classList.add("wrong");
    }
}

function clearAnswerButtons(element) {
    element.classList.remove("correct");
    element.classList.remove("wrong");
}

$(window).scroll(function() {
    const section = $(".topic3-svg");
    let windowTopPosition = $(window).scrollTop();
    let windowBottomPosition = windowTopPosition + $(window).height;
    let sectionTopPosition = section.offset().top;
    let sectionBottomPosition = sectionTopPosition + section.height;

    if ((sectionTopPosition >= windowTopPosition) && (sectionBottomPosition <= windowBottomPosition))
        animate();
});

function animate() {
    let el = document.querySelector("#Untitled1");
    let myAnimation = new LazyLinePainter(el, {"ease":"easeLinear","strokeWidth":4.9,"strokeOpacity":1,"strokeColor":"#F39C19","strokeCap":"butt"});
    myAnimation.paint();
}

//preloader before home page
$(window).on('load',function(){
    $('.preloader').addClass('complete')
})

//background music
let audio = new Audio('audio/bgm.wav');
function player()
{
    audio.loop = true;
    audio.play();
}
function playPause()
{
    if(audio.paused)
        audio.play();
    else
        audio.pause();
}

function play()
{
    audio.play();
}

function pause()
{
    if(audio.played)
        audio.pause();
}

$('#bgm').click(function(){
    $(this).find('i').toggleClass('fa-play-circle fa-pause-circle')
});
window.addEventListener("load", player);