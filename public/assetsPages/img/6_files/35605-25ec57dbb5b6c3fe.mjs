"use strict";(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[35605],{853771:(e,t,r)=>{/**
 * @license React
 * use-sync-external-store-with-selector.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */var n=r(667294),a="function"==typeof Object.is?Object.is:function(e,t){return e===t&&(0!==e||1/e==1/t)||e!=e&&t!=t},i=n.useSyncExternalStore,l=n.useRef,u=n.useEffect,o=n.useMemo,s=n.useDebugValue;t.useSyncExternalStoreWithSelector=function(e,t,r,n,c){var d=l(null);if(null===d.current){var f={hasValue:!1,value:null};d.current=f}else f=d.current;var p=i(e,(d=o(function(){function e(e){if(!u){if(u=!0,i=e,e=n(e),void 0!==c&&f.hasValue){var t=f.value;if(c(t,e))return l=t}return l=e}if(t=l,a(i,e))return t;var r=n(e);return void 0!==c&&c(t,r)?t:(i=e,l=r)}var i,l,u=!1,o=void 0===r?null:r;return[function(){return e(t())},null===o?void 0:function(){return e(o())}]},[t,r,n,c]))[0],d[1]);return u(function(){f.hasValue=!0,f.value=p},[p]),s(p),p}},331103:(e,t,r)=>{e.exports=r(853771)},615097:(e,t,r)=>{r.r(t),r.d(t,{default:()=>a});let n={argumentDefinitions:[],kind:"Fragment",metadata:null,name:"UnifiedPinRepAuthDesktopPinRep_pin",selections:[{args:null,kind:"FragmentSpread",name:"PinRepWithImpressions_pin"}],type:"Pin",abstractKey:null};n.hash="000e24070b5df05da76d803775cb37e6";let a=n},148048:(e,t,r)=>{r.r(t),r.d(t,{default:()=>a});let n={argumentDefinitions:[{defaultValue:!1,kind:"LocalArgument",name:"skipUnauthFragment"}],kind:"Fragment",metadata:null,name:"UnifiedPinRepDefaultPinRep_pin",selections:[{args:[{kind:"Variable",name:"skipUnauthFragment",variableName:"skipUnauthFragment"}],kind:"FragmentSpread",name:"PinRep_pin"}],type:"Pin",abstractKey:null};n.hash="51f44b91a29d43c6d06785fcb846b61b";let a=n},120879:(e,t,r)=>{r.r(t),r.d(t,{default:()=>a});let n={argumentDefinitions:[],kind:"Fragment",metadata:null,name:"UnifiedPinRepVariant_pin",selections:[{args:null,kind:"FragmentSpread",name:"UnifiedPinRepAuthDesktopPinRep_pin"}],type:"Pin",abstractKey:null};n.hash="7982b415980bdf92f7b9338cb5f6c539";let a=n},892236:(e,t,r)=>{r.r(t),r.d(t,{default:()=>a});let n={argumentDefinitions:[{defaultValue:!1,kind:"LocalArgument",name:"skipUnauthFragment"}],kind:"Fragment",metadata:null,name:"UnifiedPinRep_pin",selections:[{args:[{kind:"Variable",name:"skipUnauthFragment",variableName:"skipUnauthFragment"}],kind:"FragmentSpread",name:"UnifiedPinRepDefaultPinRep_pin"}],type:"Pin",abstractKey:null};n.hash="630f94c5c1fff86bdd3cb70e987c1fee";let a=n},175983:(e,t,r)=>{r.d(t,{Z:()=>n});let n=({inNux:e,inNewsHub:t,staticFeed:r,viewerIsPartner:n})=>({field_set_key:n?"hf_grid_partner":"hf_grid",in_nux:e,in_news_hub:t,static_feed:r})},259866:(e,t,r)=>{r.d(t,{Z:()=>n});function n(e){return function e(t,r){let n;if(null==t||"object"!=typeof t&&"function"!=typeof t)return t;let a=r.find(e=>e.value===t);if(a)return a.result;let i=Object.prototype.toString.call(t);switch(i){case"[object Array]":n=Array(t.length);break;case"[object Set]":n=new Set;break;case"[object Object]":case"[object Arguments]":n={};break;case"[object Map]":n=new Map;break;default:return t}let l=[...r,{value:t,result:n}];switch(i){case"[object Array]":t.forEach((t,r)=>{n[r]=e(t,l)});break;case"[object Set]":t.forEach(t=>{n.add(e(t,l))});break;case"[object Object]":case"[object Arguments]":Object.entries(t).forEach(([t,r])=>{n[t]=e(r,l)});break;case"[object Map]":t.forEach((t,r)=>{n.set(r,e(t,l))})}return n}(e,[])}},569372:(e,t,r)=>{r.d(t,{F_:()=>l,ZP:()=>a,bC:()=>u,y8:()=>i});var n=r(342513);class a{constructor(){var e,t,r;t={},(e="symbol"==typeof(r=function(e,t){if("object"!=typeof e||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var n=r.call(e,t||"default");if("object"!=typeof n)return n;throw TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(e="pending","string"))?r:String(r))in this?Object.defineProperty(this,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):this[e]=t}add(e,t,r){r&&(this.pending[e]={...this.pending[e]??{},[t]:r},r.finally?.(()=>this.remove(e,t)))}remove(e,t){this.pending[e]?.[t]&&(delete this.pending[e][t],0===Object.keys(this.pending[e]).length&&delete this.pending[e])}get(e,t){return this.pending[e]?.[t]??null}}let i=new a,{Provider:l,useMaybeHook:u}=(0,n.Z)("PendingFetches")},638747:(e,t,r)=>{r.d(t,{UZ:()=>p,Z8:()=>m,my:()=>b,vL:()=>y,w1:()=>h});var n=r(667294),a=r(545007),i=r(216167),l=r(342513),u=r(827625),o=r(785893);function s(e,t,r){let n=[...t[e][r.payload.name]??[],r.payload.handler],a={...t};return a[e]={...t[e],[r.payload.name]:n},a}function c(e,t,r){if(!t[e][r.payload.name])return t;let n=t[e][r.payload.name].filter(e=>e!==r.payload.handler),a={...t};return a[e]={...t[e],[r.payload.name]:n},a}let{Provider:d,useHook:f}=(0,l.Z)("ResourceContext");function p({children:e,resourceCreator:t}){let[{listeners:r,moreListeners:a},l]=(0,n.useReducer)((e,t)=>{switch(t.type){case"addListener":return s("listeners",e,t);case"addMoreListener":return s("moreListeners",e,t);case"removeListener":return c("listeners",e,t);case"removeMoreListener":return c("moreListeners",e,t);default:return e}},{listeners:{},moreListeners:{}});i.Z.fetchCompleteCallback=({resource:e,options:t,response:n,normalizedResponse:a,refresh:i,resourceSchema:l})=>{r[e]&&r[e].forEach(r=>r({isRefresh:i,normalizedResponse:a,options:t,schema:l,resource:e,response:n}))},i.Z.fetchMoreCompleteCallback=({resource:e,options:t,response:r,normalizedResponse:n,refresh:i,resourceSchema:l})=>{a[e]&&a[e].forEach(a=>a({isRefresh:i,normalizedResponse:n,options:t,schema:l,resource:e,response:r}))};let u=(0,n.useMemo)(()=>({listenerDispatch:l,resourceCreator:t}),[t]);return(0,o.jsx)(d,{value:u,children:e})}function m(e,t){let{listenerDispatch:r}=f();(0,n.useEffect)(()=>(r({type:"addListener",payload:{name:e,handler:t}}),()=>{r({type:"removeListener",payload:{name:e,handler:t}})}))}function b(e,t){let{listenerDispatch:r}=f();(0,n.useEffect)(()=>(r({type:"addMoreListener",payload:{name:e,handler:t}}),()=>{r({type:"removeMoreListener",payload:{name:e,handler:t}})}))}function h(){let e=(0,a.I0)();return(0,n.useCallback)((t,r)=>e((0,u.jB)(t,r)),[e])}function y(){return f().resourceCreator}},227258:(e,t,r)=>{r.d(t,{U:()=>d,b:()=>f});var n=r(216167),a=r(259866),i=r(288240),l=r(839967),u=r(827625),o=r(197036),s=r(838458);function c({addSuspenseResourceSSRData:e,fetchOptions:t,resource:r,resourceCreator:d,retry:f}){return async(p,m)=>{let{bookmark:b,headers:h,options:y,refresh:v,schema:k}=t,g=(0,i.Z)(y);if(m().resources?.[r]?.[g]?.fetching&&!f)return Promise.resolve();let _=f?f.bookmark:b,Z=(0,a.Z)(y),P=_?{...Z,bookmarks:[_]}:Z;p((0,u.LQ)(r,y,!0));try{let a=d??n.Z.create,i=await a(r,P).callGet(void 0,h);e&&i.resource&&e(r,P,i);let[m]=i.bookmarks||[],{data:g}=i.resource_response,{normalizedResponse:_,resourceSchema:Z}=(0,s.f)({data:g,opts:{bookmark:b,options:y,schema:k},resource:r})||{normalizedResponse:null,resourceSchema:void 0},R=i.resource?null:i;if(i.resource){m=i.resource_response.bookmark||"";let e=(0,o.Z)(i);_=e.normalizedResponse,Z=e.schema,R=e.response}if(Array.isArray(g)&&0===g.length&&m&&m!==l.qx){let e=f?f.count:0;if(!(e>=l.s9))return p(c({resource:r,fetchOptions:t,retry:{count:e+1,bookmark:m},resourceCreator:d}))}R&&(b?(p((0,u.Dm)(r,y,R,_,Z)),n.Z.fetchMoreCompleteCallback&&n.Z.fetchMoreCompleteCallback({resource:r,options:y,response:R,normalizedResponse:_,refresh:v,resourceSchema:Z})):(p((0,u.Sr)(r,y,R,_,v,Z)),n.Z.fetchCompleteCallback&&n.Z.fetchCompleteCallback({resource:r,options:y,response:R,normalizedResponse:_,refresh:v,resourceSchema:Z})))}catch(t){if(e){let n=t.http_status??500;e(r,y,{resource:{name:r,options:y},resource_response:{data:null,error:t,http_status:n,status:"failure"}})}p((0,u.Tl)(r,y,t))}}}let d=(e,{bookmark:t,headers:r,options:n,schema:a},i,l)=>c({resource:e,fetchOptions:{bookmark:t,headers:r,options:n,refresh:!1,schema:a},resourceCreator:i,addSuspenseResourceSSRData:l}),f=(e,{headers:t,options:r,schema:n},a)=>c({resource:e,fetchOptions:{headers:t,options:r,refresh:!0,schema:n},resourceCreator:a})},827625:(e,t,r)=>{r.d(t,{Dm:()=>o,LQ:()=>i,Sr:()=>u,Tl:()=>l,XM:()=>a,jB:()=>s});var n=r(419821);function a(e,t,r,a){return{type:n.AF,payload:{resource:e,options:t,response:r,normalizedResponse:a}}}function i(e,t,r){return{type:n.KK,payload:{resource:e,options:t,isFetching:r}}}let l=(e,t,r)=>({type:n.cR,payload:{resource:e,options:t,error:r}});function u(e,t,r,a,i,l){return{type:n.zP,payload:{isRefresh:i,normalizedResponse:a,options:t,resource:e,response:r,schema:l}}}function o(e,t,r,a,i){return{type:n.aW,payload:{resource:e,options:t,response:r,normalizedResponse:a,schema:i}}}function s(e,t){return{type:n.se,payload:{resource:e,optionsOrOptionsKey:t}}}},197036:(e,t,r)=>{r.d(t,{Z:()=>l});var n=r(782677),a=r(888037),i=r(838458);function l(e){let{resource:t,resource_response:r}=e,{name:l,options:u}=t,o=(0,a.Z)(r),{data:s,error:c}=r,d=(0,i.J)(l,{options:u});return{error:c,isRefresh:!1,normalizedResponse:d&&s?(0,n.Fv)(s,d):null,options:u,resource:l,response:{auxData:o,bookmarks:r.bookmark?[r.bookmark]:void 0,resource_response:{data:s,error:c}},schema:d}}},637253:(e,t,r)=>{r.d(t,{Z:()=>b});var n=r(667294),a=r(545007),i=r(616550),l=r(288240),u=r(5859),o=r(227258),s=r(839967),c=r(569372),d=r(638747);let{Provider:f,useMaybeHook:p}=(0,r(342513).Z)("SuspensefulResource"),m=({httpStatus:e})=>!e||e>=500;function b(e,t,r){let{enabledRouteRefresh:f,headers:b,name:h,noCache:y,options:v,schema:k}=e;p(),p();let g=(0,c.bC)(),_=(0,d.vL)(),Z=(0,a.I0)(),P=(0,l.Z)(v),R=(0,n.useRef)(),j=(0,i.k6)(),S=j&&"POP"!==j.action,C=(0,n.useRef)(),L=e=>e[h]?.[P],A=(0,a.v9)(({resources:e})=>L(e)?.data),F=(0,a.v9)(({resources:e})=>L(e)?.error),x=!!F||void 0!==A,D=(0,a.v9)(({resources:e})=>!!L(e)?.fetching),M=(0,a.v9)(({resources:e})=>L(e)?.nextBookmark),E=x&&!D&&M===s.qx,U=!!(x&&f&&S&&!t),[w,K]=(0,n.useState)(U),O=w;(0,a.wU)(A,C.current)||(w&&(C.current||!U)&&(O=!1,K(!1)),C.current=A);let H=(0,n.useCallback)(e=>{let t=Z((0,o.U)(h,{options:v,schema:k,bookmark:e,headers:b},_,void 0));e||g?.add(h,P,t)},[Z,h,P,k,b]),V=(0,n.useCallback)(()=>{let e=Z((0,o.b)(h,{options:v,schema:k,headers:b},_));g?.add(h,P,e)},[Z,h,P,k,b]),B=(0,n.useCallback)(()=>{t||(V(),K(!0))},[t,V]),Q=(0,n.useCallback)(()=>{!M||E||D||t||H(M)},[t,H,E,D,M]),{isBot:z}=(0,u.B)(),N=(0,n.useCallback)(()=>{if(!(D||g?.get(h,P))&&!t&&R.current!==P){let e=void 0===R.current;R.current=P,!x||r&&e&&F&&m(F)?H():(!z&&y||U)&&V()}},[r,H,V,t,F,z,D,x,U,h,y,P,g]),T=(0,n.useMemo)(()=>({fetchMore:Q,isFetching:D,isLoaded:x,isRefreshing:O,name:h,optionsKey:P,refresh:B}),[Q,D,x,O,h,P,B]);return(0,n.useMemo)(()=>({fetchResource:N,ref:T}),[N,T])}},757640:(e,t,r)=>{r.d(t,{Z:()=>o});var n=r(667294),a=r(545007),i=r(288240),l=r(839967),u=r(637253);function o(e){let{enabledRouteRefresh:t,headers:r,name:o,noCache:s,options:c,schema:d}=e??{name:l.fY,options:null},f=(0,i.Z)(c),p=e=>e[o]?.[f],m=(0,a.v9)(({resources:e})=>p(e)?.nextBookmark),b=(0,a.v9)(({resources:e})=>p(e)?.data),h=(0,a.v9)(({resources:e})=>p(e)?.auxData),y=(0,a.v9)(({resources:e})=>p(e)?.error),{fetchResource:v,ref:{fetchMore:k,isFetching:g,isLoaded:_,isRefreshing:Z,refresh:P}}=(0,u.Z)({enabledRouteRefresh:t,headers:r,name:o,noCache:s,options:c,schema:d},!e,!0),R=_&&!g&&m===l.qx;return(0,n.useEffect)(()=>{v()}),(0,n.useMemo)(()=>({auxData:h,data:b,error:y,fetchMore:k,isAtEnd:R,isFetching:g,isLoaded:_,isRefreshing:Z,nextBookmark:m,refresh:P}),[h,b,y,k,R,g,_,Z,m,P])}},608516:(e,t,r)=>{r.d(t,{Z:()=>n});let n=r(14583).Z},149722:(e,t,r)=>{r.d(t,{$:()=>n,Z:()=>i});let{Provider:n,useHook:a}=(0,r(342513).Z)("viewer"),i=a},676554:(e,t,r)=>{r.d(t,{BK:()=>m,Tw:()=>b,ZP:()=>P,rX:()=>R}),r(167912);var n,a,i,l,u=r(711147),o=r(340523),s=r(554786),c=r(149722),d=r(19447),f=r(728294),p=r(785893);let m=(0,f.Z)(()=>Promise.all([r.e(97270),r.e(84422),r.e(26298),r.e(8782),r.e(2984)]).then(r.bind(r,912849)),void 0,"AuthDesktopPinRep"),b=(0,f.Z)(()=>Promise.all([r.e(97270),r.e(39921)]).then(r.bind(r,515517)),void 0,"DefaultPinRep"),h=void 0!==n?n:n=r(892236),y=void 0!==a?a:a=r(120879),v=void 0!==i?i:i=r(615097),k=e=>{let{pinKey:t,...r}=e,n=(0,u.Z)(v,t);return(0,p.jsx)(m,{...r,pinKey:n})},g=e=>{let{pinId:t,pin:r,...n}=e,a=(0,d.S6)(),i=(t?a(t):null)||r,l=i?.tracking_params;return(0,p.jsx)(m,{...n,pinKey:{type:"deprecated",data:i},trackingParams:l})},_=void 0!==l?l:l=r(148048),Z=e=>{let{pinKey:t,...r}=e,n=(0,u.Z)(_,e.pinKey);return(0,p.jsx)(b,{...r,duploQueryRef:n})};function P(e){let t=(0,s.HG)(),r=(0,c.Z)(),n=r&&r.isAuth&&t,a=(0,u.Z)(h,e.duploQueryRef),{checkExperiment:i}=(0,o.F)();if(!(!n||e.duploQueryRef||i("web_auth_desktop_default_pin_rep").anyEnabled)){let{disableAppUpsell:t,duploDedupeVisualAnnotations:r,duploDisablePinCardPadding:n,duploFeedItemProps:a,duploIsSquarePin:i,duploLazyLoadImage:l,duploOneTapSave:u,duploPinCardDetailsMargin:o,duploPriorityFetchImage:s,duploQueryRef:c,duploShouldAddNiiSearchParamToImageUrls:d,duploShouldAllowProductPriceIndicator:f,duploConversationPin:m,topLevelTrafficSource:b,topLevelTrafficSourceDepth:h,trafficSource:y,...v}=e;return(0,p.jsx)(g,{...v})}let{blockClickEvents:l,borderStyle:d,disableHover:f,imageHeightModifier:m,imageOnlyOption:b,onError:y,onLoad:v,pin:k,pinImageCrop:_,pinImageFit:P,resolution:R,rounding:j,saveButtonOptions:S,authDesktopSelectionState:C,pinOwner:L,duploQueryRef:A,...F}=e;return(0,p.jsx)(Z,{...F,pinKey:a})}function R(e){let t=(0,s.HG)(),r=(0,c.Z)(),n=r&&r.isAuth&&t,a=(0,u.Z)(h,e.duploQueryRef),i=(0,u.Z)(y,e.pinKey),{checkExperiment:l}=(0,o.F)();if(!(!n||e.duploQueryRef||l("web_auth_desktop_default_pin_rep").anyEnabled)&&null!=i&&null!=e.pinKey){let{disableAppUpsell:t,duploDedupeVisualAnnotations:r,duploDisablePinCardPadding:n,duploFeedItemProps:a,duploIsSquarePin:l,duploLazyLoadImage:u,duploOneTapSave:o,duploPinCardDetailsMargin:s,duploPriorityFetchImage:c,duploQueryRef:d,duploShouldAddNiiSearchParamToImageUrls:f,duploShouldAllowProductPriceIndicator:m,duploConversationPin:b,topLevelTrafficSource:h,topLevelTrafficSourceDepth:y,trafficSource:v,pinKey:g,..._}=e,{pin:Z,pinId:P,...R}=_;return(0,p.jsx)(k,{...R,pinKey:i})}let{blockClickEvents:d,borderStyle:f,disableHover:m,imageHeightModifier:b,imageOnlyOption:v,onError:g,onLoad:_,pin:P,pinImageCrop:R,pinImageFit:j,resolution:S,rounding:C,saveButtonOptions:L,authDesktopSelectionState:A,pinOwner:F,duploQueryRef:x,...D}=e;return(0,p.jsx)(Z,{...D,pinKey:a})}},19447:(e,t,r)=>{r.d(t,{AF:()=>u,H0:()=>o,S6:()=>s,_S:()=>c});var n=r(545007),a=r(342513),i=r(785893);let{Provider:l,useHook:u,useMaybeHook:o}=(0,a.Z)("Pins");function s(){let e=u();return t=>e[t]}function c({children:e}){let t=(0,n.v9)(({pins:e})=>e,n.wU);return(0,i.jsx)(l,{value:t,children:e})}},838458:(e,t,r)=>{r.d(t,{J:()=>i,f:()=>l});var n=r(782677),a=r(539426);let i=(e,{bookmark:t,options:r,schema:n})=>{let i=n||a.Z[e];return"function"==typeof i?i({resource:e,options:r,bookmark:t}):i};function l({data:e,opts:{bookmark:t,options:r,schema:a},resource:l}){let u=i(l,{bookmark:t,options:r,schema:a});return{normalizedResponse:u&&e?(0,n.Fv)(e,u):null,resourceSchema:u}}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/35605-25ec57dbb5b6c3fe.mjs.map