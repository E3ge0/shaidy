(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[4569],{17722:function(e,t,n){"use strict";var r=n(89755),o=n.n(r),a=n(19521),c=n(11714),i=n(59546),s=n(85893),l=a.ZP.div.withConfig({displayName:"PriceSticker__Container",componentId:"sc-8rdc2x-0"})(["display:flex;flex-direction:row;align-items:center;justify-content:space-between;border:1px solid rgba(93,25,255,0.1);border-radius:20px;width:max-content;"]),u=a.ZP.div.withConfig({displayName:"PriceSticker__DeliveryContainer",componentId:"sc-8rdc2x-1"})(["border-radius:20px;padding:0 6px 0 12px;"]),p=a.ZP.div.withConfig({displayName:"PriceSticker__PriceContainer",componentId:"sc-8rdc2x-2"})(["background:rgba(93,25,255,0.1);border-radius:20px;height:100%;display:flex;align-items:center;justify-content:center;padding:10px 15px;"]),d=a.ZP.p.withConfig({displayName:"PriceSticker__Price",componentId:"sc-8rdc2x-3"})(["display:inline-block;font-size:12px;margin:0;padding:0;color:",";font-weight:700;font-family:'Montserrat',sans-serif;@media ","{font-size:14px;}"],c.Vb,i.U.laptop),f=a.ZP.span.withConfig({displayName:"PriceSticker__LowerPrice",componentId:"sc-8rdc2x-4"})(["font-size:10px;font-weight:400;@media ","{font-size:12px;}"],i.U.laptop),h=a.ZP.div.withConfig({displayName:"PriceSticker__ImgContainer",componentId:"sc-8rdc2x-5"})(["width:32px;height:32px;position:relative !important;> div{position:relative !important;}.image{width:100% !important;position:relative !important;height:unset !important;}"]);t.Z=function(e){var t=e.price,n=e.lowerPrice,r=void 0!==n&&n,a=e.currency,c=e.deliveryDays;return(0,s.jsxs)(l,{children:[2===c&&(0,s.jsx)(u,{children:(0,s.jsx)(h,{children:(0,s.jsx)(o(),{src:"/images/comparator/icon-48h-delivery.png",alt:"Delivery icon",className:"image",layout:"fill",objectFit:"contain"})})}),null===t&&(0,s.jsx)(p,{children:(0,s.jsx)(d,{children:"\xc0 venir"})}),null!==t&&r&&(0,s.jsx)(p,{children:(0,s.jsxs)(d,{children:[(0,s.jsx)(f,{children:"\xc0 partir de"})," ",(Math.round(100*t)/100).toFixed(0)," ",a]})}),null!==t&&!r&&(0,s.jsx)(p,{children:(0,s.jsxs)(d,{children:[(Math.round(100*t)/100).toFixed(0)," ",a]})})]})}},21653:function(e,t,n){"use strict";n.d(t,{z:function(){return j}});var r=n(59499),o=n(9669),a=n.n(o),c=n(97334),i=n(53416),s=n(55835),l=Date.now,u={nowSecs:function(e){return Math.floor((Date.now()+(e||0))/1e3)},now:function(e){return l()+(e||0)},parseContentType:function(e){return e?e.split(";")[0].trim().toLowerCase():""}},p=function(e,t){var n=t.resource||"";if(n&&"/"!==n[0]){var r=new URL(n);n=r.pathname+r.searchParams}var o="hawk.".concat("1",".").concat(e,"\n").concat(t.ts,"\n").concat(t.nonce,"\n").concat((t.method||"").toUpperCase(),"\n").concat(n,"\n").concat(t.host.toLowerCase(),"\n").concat(t.port,"\n").concat(t.hash||"","\n");return t.ext&&(o+=t.ext.replace(/\\/g,"\\\\").replace(/\n/g,"\\n")),o="".concat(o,"\n"),t.app&&(o="".concat(o+t.app,"\n").concat(t.dlg||"","\n")),o},d=function(e,t){var n=(0,s.js)(e);return n.update("hawk.".concat("1",".payload\n")),n.update("".concat(u.parseContentType(t),"\n")),n},f=function(e){return e.update("\n"),e.digest("base64")},h=function(e,t){var n=(0,s.zH)(t.algorithm,t.key);return n.update("hawk.".concat("1",".ts\n").concat(e,"\n")),n.digest("base64")},m={headerVersion:"1",algorithms:["sha1","sha256"],calculateMac:function(e,t,n){var r=p(e,n);return(0,s.zH)(t.algorithm,t.key).update(r).digest("base64")},calculatePayloadHash:function(e,t,n){var r=d(t,n);return r.update(e||""),f(r)},calculateTsMac:h,generateNormalizedString:p,initializePayloadHash:d,finalizePayloadHash:f,timestampMessage:function(e,t){var n=u.nowSecs(t),r=h(n,e);return{ts:n,tsm:r}}},g=function(e,t,n){if(!e||"string"!=typeof e&&"object"!=typeof e||!t||"string"!=typeof t||!n||"object"!=typeof n)throw Error("Invalid argument type");var r=n.timestamp||u.nowSecs(n.localtimeOffsetMsec),o=n.credentials;if(!(null!=o&&o.id)||!o.key||!o.algorithm)throw Error("Invalid credentials");if(-1===m.algorithms.indexOf(o.algorithm))throw Error("Unknown algorithm");"string"==typeof e&&(e=new URL(e));var a={ts:r,nonce:n.nonce||(0,i.x0)(12),method:t,resource:e.pathname+(e.search||""),host:e.hostname,port:e.port||("http:"===e.protocol?80:443),hash:n.hash,ext:n.ext,app:n.app,dlg:n.dlg};!a.hash&&(n.payload||""===n.payload)&&(a.hash=m.calculatePayloadHash(n.payload,o.algorithm,n.contentType));var c=m.calculateMac("header",o,a),s=null!==a.ext&&void 0!==a.ext&&""!==a.ext,l='Hawk id="'.concat(o.id,'", ts="').concat(a.ts,'", nonce="').concat(a.nonce).concat(a.hash?'", hash="'.concat(a.hash):"").concat(s?'", ext="'.concat(""):"",'", mac="').concat(c,'"');return a.app&&(l="".concat(l,', app="').concat(a.app).concat(a.dlg?'", dlg="'.concat(a.dlg):"",'"')),{header:l,artifacts:a}},v=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=t.localtimeOffsetSec,r=e;if(r.url&&r.method){r.params&&(Object.keys(r.params).forEach(function(e){return void 0===r.params[e]&&delete r.params[e]}),r.url="".concat(r.url,"?").concat((0,c.stringify)(r.params)),delete r.params);var o=g("https://backend.whentocop.fr"+r.url,r.method,{credentials:{id:"__public__",key:"pUMJknquVQ#CLsvAQYenPWa9c5sES6IgEP$oSmK?",algorithm:"sha256"},localtimeOffsetMsec:1e3*(void 0===n?0:n)}).header;r.headers.Authorization=o}return r},y=n(83454);function w(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,r)}return n}function x(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?w(Object(n),!0).forEach(function(t){(0,r.Z)(e,t,n[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):w(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}var b=a().create({baseURL:"https://backend.whentocop.fr"}),k=0;b.interceptors.request.use(function(e){var t,n=null!==(t=e.headers)&&void 0!==t?t:{};return n["x-api-key"]||(y.env.API_MASTER_KEY?n["x-api-key"]=y.env.API_MASTER_KEY:n["x-api-key"]="9ohHCGD4hG2S0iX7wKCJRdSDHlwF3wEjNIM@jB@l"),e.timeskew=k,e=v(e,{localtimeOffsetSec:k})},function(e){return Promise.reject(e)}),b.interceptors.response.use(function(e){return e},function(e){var t;if((null===(t=e.response)||void 0===t?void 0:t.status)===401){var n,r,o,c,i=null===(n=e.response)||void 0===n?void 0:null===(r=n.data)||void 0===r?void 0:null===(o=r.content)||void 0===o?void 0:o.skew,s=null==e?void 0:null===(c=e.config)||void 0===c?void 0:c.timeskew;if("number"==typeof i&&"number"==typeof s)return console.log("Timestamp skew detected, retrying with new skew",s+" - "+i),k=s-i,a().request(e.config)}return Promise.reject(e)});var j=function(e,t){var n=a().CancelToken.source(),r=b(x(x(x({},e),t),{},{cancelToken:n.token})).then(function(e){return{headers:e.headers,body:e.data}});return r.cancel=function(){n.cancel("Query was cancelled")},r}},44722:function(e,t,n){"use strict";n.d(t,{HI:function(){return a},b5:function(){return o}});var r=n(21653),o=function(e,t,n){return(0,r.z)({url:"/api/drops",method:"get",params:e,signal:n},t)},a=function(e,t,n){return(0,r.z)({url:"/api/drops/".concat(e),method:"get",signal:n},t)}},88357:function(e,t,n){"use strict";n.d(t,{w_:function(){return s}});var r=n(67294),o={color:void 0,size:void 0,className:void 0,style:void 0,attr:void 0},a=r.createContext&&r.createContext(o),c=function(){return(c=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var o in t=arguments[n])Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o]);return e}).apply(this,arguments)},i=function(e,t){var n={};for(var r in e)Object.prototype.hasOwnProperty.call(e,r)&&0>t.indexOf(r)&&(n[r]=e[r]);if(null!=e&&"function"==typeof Object.getOwnPropertySymbols)for(var o=0,r=Object.getOwnPropertySymbols(e);o<r.length;o++)0>t.indexOf(r[o])&&Object.prototype.propertyIsEnumerable.call(e,r[o])&&(n[r[o]]=e[r[o]]);return n};function s(e){return function(t){return r.createElement(l,c({attr:c({},e.attr)},t),function e(t){return t&&t.map(function(t,n){return r.createElement(t.tag,c({key:n},t.attr),e(t.child))})}(e.child))}}function l(e){var t=function(t){var n,o=e.attr,a=e.size,s=e.title,l=i(e,["attr","size","title"]),u=a||t.size||"1em";return t.className&&(n=t.className),e.className&&(n=(n?n+" ":"")+e.className),r.createElement("svg",c({stroke:"currentColor",fill:"currentColor",strokeWidth:"0"},t.attr,o,l,{className:n,style:c(c({color:e.color||t.color},t.style),e.style),height:u,width:u,xmlns:"http://www.w3.org/2000/svg"}),s&&r.createElement("title",null,s),e.children)};return void 0!==a?r.createElement(a.Consumer,null,function(e){return t(e)}):t(o)}},46601:function(){},89214:function(){},71922:function(){},2363:function(){},96419:function(){},56353:function(){},69386:function(){},31616:function(){}}]);