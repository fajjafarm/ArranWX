(()=>{var e,t={847:()=>{!function(e){"use strict";if(document.querySelectorAll(".save").forEach((function(e){e.addEventListener("click",(function(){e.classList.add("active")}))})),e("#overall-chart").length){var t=[IQUtils.getVariableColor().primary],r={series:[{name:"Profiles",data:[40,55,25,60,30,85,60,75,57]}],colors:t,chart:{height:300,type:"line",toolbar:{show:!1}},forecastDataPoints:{count:2},stroke:{width:3},grid:{show:!0,strokeDashArray:7},markers:{size:6,colors:"#FFFFFF",strokeColors:t,strokeWidth:2,strokeOpacity:.9,strokeDashArray:0,fillOpacity:0,shape:"circle",radius:2,offsetX:0,offsetY:0},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep"],tooltip:{enabled:!1}},yaxis:{tickAmount:5,min:0,max:100},responsive:[{breakpoint:1399,options:{chart:{height:230},xaxis:{minHeight:20,maxHeight:20}}}]},o=new ApexCharts(document.querySelector("#overall-chart"),r);o.render(),document.addEventListener("theme_color",(function(e){var t=IQUtils.getVariableColor(),r={colors:[t.primary,t.info]};o.updateOptions(r)})),document.addEventListener("body_font_family",(function(e){var t=getComputedStyle(document.body).getPropertyValue("--prefix")||"bs-";t&&(t=t.trim());var r={chart:{fontFamily:[getComputedStyle(document.body).getPropertyValue("--".concat(t,"body-font-family")).trim()]}};o.updateOptions(r)}))}if(document.querySelectorAll("#social-1").length){var a={chart:{height:150,type:"area",sparkline:{enabled:!0},group:"sparklines"},dataLabels:{enabled:!1},stroke:{width:3,curve:"smooth"},fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.5,opacityTo:.3}},series:[{name:"series1",data:[10,35,20,50,70]}],colors:[IQUtils.getVariableColor().info],xaxis:{type:"datetime",categories:["2018-08-19T00:00:00","2018-09-19T01:30:00","2018-10-19T02:30:00","2018-11-19T01:30:00","2018-12-19T01:30:00"]},tooltip:{x:{format:"dd/MM/yy HH:mm"},enabled:!1}},i=new ApexCharts(document.querySelector("#social-1"),a);i.render(),document.addEventListener("theme_color",(function(e){var t={colors:[IQUtils.getVariableColor().info],fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.5,opacityTo:.3}}};i.updateOptions(t)}))}if(document.querySelectorAll("#social-2").length){var n={chart:{height:150,type:"area",sparkline:{enabled:!0},group:"sparklines"},dataLabels:{enabled:!1},stroke:{width:3,curve:"smooth"},fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.5,opacityTo:.5}},series:[{name:"series1",data:[70,50,20,35,10]}],colors:[IQUtils.getVariableColor().primary],xaxis:{type:"datetime",categories:["2018-08-19T00:00:00","2018-09-19T01:30:00","2018-10-19T02:30:00","2018-11-19T01:30:00","2018-12-19T01:30:00"]},tooltip:{x:{format:"dd/MM/yy HH:mm"},enabled:!1}},s=new ApexCharts(document.querySelector("#social-2"),n);s.render(),document.addEventListener("theme_color",(function(e){var t={colors:[IQUtils.getVariableColor().primary],fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.5,opacityTo:.3}}};s.updateOptions(t)}))}}(jQuery)},183:()=>{}},r={};function o(e){var a=r[e];if(void 0!==a)return a.exports;var i=r[e]={exports:{}};return t[e](i,i.exports,o),i.exports}o.m=t,e=[],o.O=(t,r,a,i)=>{if(!r){var n=1/0;for(d=0;d<e.length;d++){for(var[r,a,i]=e[d],s=!0,l=0;l<r.length;l++)(!1&i||n>=i)&&Object.keys(o.O).every((e=>o.O[e](r[l])))?r.splice(l--,1):(s=!1,i<n&&(n=i));if(s){e.splice(d--,1);var c=a();void 0!==c&&(t=c)}}return t}i=i||0;for(var d=e.length;d>0&&e[d-1][2]>i;d--)e[d]=e[d-1];e[d]=[r,a,i]},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={476:0,86:0};o.O.j=t=>0===e[t];var t=(t,r)=>{var a,i,[n,s,l]=r,c=0;if(n.some((t=>0!==e[t]))){for(a in s)o.o(s,a)&&(o.m[a]=s[a]);if(l)var d=l(o)}for(t&&t(r);c<n.length;c++)i=n[c],o.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return o.O(d)},r=self.webpackChunk=self.webpackChunk||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),o.O(void 0,[86],(()=>o(847)));var a=o.O(void 0,[86],(()=>o(183)));a=o.O(a)})();