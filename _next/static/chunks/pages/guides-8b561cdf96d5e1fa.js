(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[5874],{69310:function(t,i,e){"use strict";var n=e(67294),a=e(19521),o=e(59546),r=e(90849),s=e(31204),l=e(85893),p=a.ZP.section.withConfig({displayName:"AllPosts__Section",componentId:"sc-6aropc-0"})(["display:flex;flex-direction:column;justify-content:flex-start;align-items:flex-start;margin:0;"]),d=a.ZP.div.withConfig({displayName:"AllPosts__Container",componentId:"sc-6aropc-1"})(["display:flex;flex-wrap:wrap;justify-content:",";width:100%;"],function(t){return t.postsNumber<3?"unset":"space-between"}),c=a.ZP.div.withConfig({displayName:"AllPosts__AdsContainer",componentId:"sc-6aropc-2"})(["margin:0;width:100%;@media ","{width:60%;margin:50px auto;}"],o.U.laptopXL);i.Z=function(t){var i=t.posts,e=t.pagePath,a=t.adsBanner;return(0,l.jsx)(p,{children:(0,l.jsx)(d,{postsNumber:i.length,children:i.items.map(function(t,o){return(0,l.jsxs)(n.Fragment,{children:[3===o&&a&&(0,l.jsx)(c,{children:(0,l.jsx)(r.Z,{ImgPath:a.items[0].images[0].url,AdsUrl:a.items[0].link})}),(0,l.jsx)(s.Z,{post:t,pagePath:e,postsNumber:i.length,horizontalView:!0})]},t.id)})})})}},82642:function(t,i,e){"use strict";var n=e(41664),a=e.n(n),o=e(19521),r=e(11714),s=e(59546),l=e(85893),p=o.ZP.a.withConfig({displayName:"CategoryTag__CategoryLink",componentId:"sc-h38akm-0"})(["padding:",";margin:",";width:",";background:",";border-radius:50px;display:flex;justify-content:center;align-items:center;font-size:8px;text-transform:uppercase;font-family:'Montserrat',sans-serif;font-weight:500;color:",";@media ","{padding:",";font-size:10px;}"],function(t){return t.largeTag?"5px 0":"4px 9px"},function(t){return t.largeTag?0:"0 10px 0 0"},function(t){return t.largeTag?t.tagWidth:"unset"},r.QV,r.uR,s.U.tablet,function(t){return t.largeTag?"8px 0":"4px 9px"}),d=o.ZP.div.withConfig({displayName:"CategoryTag__CategoryUnclicable",componentId:"sc-h38akm-1"})(["padding:",";margin:",";width:",";background:",";border-radius:50px;display:flex;justify-content:center;align-items:center;font-size:8px;text-transform:uppercase;font-family:'Montserrat',sans-serif;font-weight:500;color:",";@media ","{padding:",";font-size:10px;}"],function(t){return t.largeTag?"5px 0":"4px 9px"},function(t){return t.largeTag?0:"0 10px 0 0"},function(t){return t.largeTag?t.tagWidth:"unset"},r.QV,r.uR,s.U.tablet,function(t){return t.largeTag?"8px 0":"4px 9px"});i.Z=function(t){var i=t.categoryName,e=t.largeTag,n=void 0!==e&&e,o=t.tagWidth,r=void 0===o?"30%":o,s=t.tagHref;return(0,l.jsxs)(l.Fragment,{children:[s&&(0,l.jsx)(a(),{href:s,passHref:!0,legacyBehavior:!0,children:(0,l.jsx)(p,{largeTag:n,tagWidth:r,children:i})}),!s&&(0,l.jsx)(d,{largeTag:n,tagWidth:r,children:i})]})}},31204:function(t,i,e){"use strict";e.d(i,{Z:function(){return _}});var n=e(89755),a=e.n(n),o=e(41664),r=e.n(o),s=e(19521),l=e(11714),p=function(t){return Math.ceil(t.trim().split(/\s+/).length/225)},d=e(59546),c=e(8410),m=e(4995),u=e(85893),g=s.ZP.a.withConfig({displayName:"PostCardPreview__Container",componentId:"sc-1j4wnl5-0"})(["margin:20px 0 45px 0;width:100%;@media ","{width:",";transition:all ease 0.5s;display:",";flex-direction:",";margin:",";}@media ","{margin:20px 0 45px 0;cursor:pointer;&:hover{opacity:0.8;transition:all ease 0.5s;}}"],d.U.tablet,function(t){return t.horizontalView?"100%":"32%"},function(t){return t.horizontalView&&"flex"},function(t){return t.horizontalView&&"row-reverse"},function(t){return t.postsNumber<3?"20px 0 0 0":"20px 0"},d.U.laptop),h=s.ZP.div.withConfig({displayName:"PostCardPreview__ImgContainer",componentId:"sc-1j4wnl5-1"})(["flex:1;height:12rem;padding:0;position:relative !important;@media ","{flex:0.4;}@media ","{flex:0.4;}@media ","{flex:0.3;}> div{position:relative !important;}.image{width:100% !important;position:relative !important;height:unset !important;}"],d.U.tablet,d.U.laptopL,d.U.laptopXL),f=s.ZP.div.withConfig({displayName:"PostCardPreview__ContentContainer",componentId:"sc-1j4wnl5-2"})(["flex:1;padding:0px 0;margin:0;align-self:",";height:",";@media ","{margin-right:",";flex:0.6;}@media ","{flex:0.7;}"],function(t){return t.horizontalView&&"center"},function(t){return t.horizontalView&&"fit-content"},d.U.tablet,function(t){return t.horizontalView?"50px":0},d.U.laptopXL),x=s.ZP.h2.withConfig({displayName:"PostCardPreview__PostTitleH2",componentId:"sc-1j4wnl5-3"})(["font-size:16px;color:",";font-family:'Montserrat',sans-serif;margin:10px 0 0 0;@media ","{font-size:23px;margin:",";max-width:85%;}@media ","{max-width:90%;}@media ","{max-width:70%;}"],l.E5,d.U.tablet,function(t){return t.horizontalView?0:"10px 0 0 0"},d.U.laptopL,d.U.laptopXL),w=s.ZP.h3.withConfig({displayName:"PostCardPreview__PostTitleH3",componentId:"sc-1j4wnl5-4"})(["font-size:16px;color:",";font-family:'Montserrat',sans-serif;margin:10px 0 0 0;@media ","{font-size:23px;margin:",";max-width:85%;}@media ","{max-width:90%;}@media ","{max-width:70%;}"],l.E5,d.U.tablet,function(t){return t.horizontalView?0:"10px 0 0 0"},d.U.laptopL,d.U.laptopXL),v=s.ZP.p.withConfig({displayName:"PostCardPreview__PostDescription",componentId:"sc-1j4wnl5-5"})(["font-size:13px;font-weight:300;color:",";font-family:'Montserrat',sans-serif;margin:10px 0 0 0;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;line-clamp:2;-webkit-box-orient:vertical;line-height:20px;"],l.uR),y=s.ZP.p.withConfig({displayName:"PostCardPreview__MetaText",componentId:"sc-1j4wnl5-6"})(["font-size:10px;color:",";font-family:'Montserrat',sans-serif;padding:0;margin:0;@media ","{font-size:11px;}"],l.uR,d.U.tablet),b=s.ZP.div.withConfig({displayName:"PostCardPreview__PointSeparator",componentId:"sc-1j4wnl5-7"})(["width:2px;height:2px;border-radius:100%;background:",";margin:0 6px;"],l.uR),_=function(t){var i,e,n=t.post,o=t.pagePath,s=t.horizontalView,l=void 0!==s&&s,d=t.postsNumber,_=t.titleType,C=void 0===_?"h2":_;return(0,u.jsx)(r(),{href:"".concat(void 0===o?"/blog":o,"/").concat(n.slug),passHref:!0,legacyBehavior:!0,children:(0,u.jsxs)(g,{horizontalView:l,postsNumber:d,children:[n.thumbnail[0]&&(0,u.jsx)(h,{horizontalView:l,children:(0,u.jsx)(a(),{src:null===(i=n.thumbnail[0])||void 0===i?void 0:i.url,layout:"fill",objectFit:"cover",className:"image",alt:n.thumbnail[0].alternativeText||"Article thumbail",title:n.thumbnail[0].alternativeText?n.thumbnail[0].alternativeText:"Article thumbail",placeholder:"blur",blurDataURL:null===(e=n.thumbnail[0])||void 0===e?void 0:e.url})}),(0,u.jsxs)(f,{horizontalView:l,children:["h2"===C&&(0,u.jsx)(x,{horizontalView:l,children:n.title}),"h3"===C&&(0,u.jsx)(w,{horizontalView:l,children:n.title}),(0,u.jsx)(v,{children:n.shortDescription}),(0,u.jsxs)("div",{style:{display:"flex",alignItems:"center",marginTop:12},children:[n.publicationDate&&(0,u.jsx)(y,{children:(0,c.ev)(n.publicationDate)}),(0,u.jsx)(b,{}),(0,u.jsx)(y,{children:p(null==n?void 0:n.content)>1?p(null==n?void 0:n.content)+" minutes":p(null==n?void 0:n.content)+" minute"}),(0,u.jsx)(b,{}),(0,u.jsx)(m.Z,{categories:n.blogCategories,nbCategoriesDisplayed:1})]})]})]})})}},4995:function(t,i,e){"use strict";var n=e(19521),a=e(82642),o=e(85893),r=n.ZP.div.withConfig({displayName:"PostCategories__CategoriesContainer",componentId:"sc-1mmlc33-0"})(["display:flex;"]);i.Z=function(t){var i=t.categories,e=t.nbCategoriesDisplayed,n=void 0===e?1:e;return(0,o.jsx)(r,{children:i.filter(function(t,i){return i+1<=n}).map(function(t){return(0,o.jsx)(a.Z,{categoryName:t.displayName},t.id)})})}},90849:function(t,i,e){"use strict";var n=e(89755),a=e.n(n),o=e(19521),r=e(59546),s=e(85893),l=o.ZP.a.withConfig({displayName:"AdsBanner__Cta",componentId:"sc-1s3h0l4-0"})(["cursor:pointer;display:flex;justify-content:center;margin-bottom:20px;width:100%;@media ","{margin-bottom:30px;}"],r.U.laptop),p=o.ZP.div.withConfig({displayName:"AdsBanner__ImageContainer",componentId:"sc-1s3h0l4-1"})(["width:100%;height:100px;margin:0;padding:0;position:relative !important;@media ","{max-width:",";height:10rem;}> div{position:relative !important;}.image{width:100% !important;position:relative !important;height:unset !important;}"],r.U.laptop,function(t){return t.imgWidth||"100%"});i.Z=function(t){var i=t.ImgPath,e=t.AdsUrl,n=t.imgWidth;return(0,s.jsx)(l,{href:e,rel:"noopener",target:"_blank",children:(0,s.jsx)(p,{imgWidth:n,children:(0,s.jsx)(a(),{src:i,alt:"Ads banner",title:"Ads banner",className:"image",layout:"fill",objectFit:"contain"})})})}},51500:function(t,i,e){"use strict";e.r(i),e.d(i,{__N_SSG:function(){return u}});var n=e(19521),a=e(69310),o=e(39499),r=e(86689),s=e(11714),l=e(59546),p=e(85893),d=n.ZP.div.withConfig({displayName:"guides__Container",componentId:"sc-zqrcim-0"})(["padding:15px 20px 45px 20px;margin:",";@media ","{padding:50px 10% 40px 10%;}@media ","{padding:50px 20% 40px 20%;}"],function(t){return t.margin||0},l.U.laptop,l.U.laptopL),c=n.ZP.div.withConfig({displayName:"guides__HeaderContainer",componentId:"sc-zqrcim-1"})(["display:flex;flex-direction:column;align-items:flex-start;@media ","{flex-direction:row;justify-content:space-between;align-items:center;margin-bottom:10px;}"],l.U.tablet),m=n.ZP.h1.withConfig({displayName:"guides__CategoryTitle",componentId:"sc-zqrcim-2"})(["font-size:25px;color:",";font-family:'Montserrat',sans-serif;font-weight:600;text-transform:capitalize;margin:30px 0;position:relative;z-index:10;width:max-content;&:before{content:'';position:absolute;background:",";width:103%;height:10px;left:-2px;bottom:1px;z-index:-10;}@media ","{font-size:28px;}"],s.$J,s._8,l.U.laptop),u=!0;i.default=function(t){var i=t.guides;return(0,p.jsxs)(o.Z,{lightNav:!0,children:[(0,p.jsx)(r.Z,{title:"Tous les guides sneakers et streetwear pour cop tes sneakers avec WhenToCop?",description:"Depuis 2020, WhenToCop? t'aides \xe0 avoir toutes les informations sur les sneakers hype. Retrouve tous nos guides pour cop tes sneakers !",url:"https://www.whentocop.fr/guides"}),(0,p.jsxs)(d,{margin:"70px 0 0 0",children:[(0,p.jsx)(c,{children:(0,p.jsx)(m,{children:"Guides"})}),(0,p.jsx)(a.Z,{posts:i,pagePath:"/guides"})]})]})}},48155:function(t,i,e){(window.__NEXT_P=window.__NEXT_P||[]).push(["/guides",function(){return e(51500)}])}},function(t){t.O(0,[5308,5449,482,6472,9774,2888,179],function(){return t(t.s=48155)}),_N_E=t.O()}]);