(window.__wcAdmin_webpackJsonp=window.__wcAdmin_webpackJsonp||[]).push([[6],{527:function(e,t,r){"use strict";r.d(t,"b",(function(){return u})),r.d(t,"a",(function(){return l}));var n=r(0),c=r(28),s=r(91),o=r.n(s),a=r(23);const i=o()(a.a),u=e=>{const t=i.getCurrencyConfig(),r=Object(c.applyFilters)("woocommerce_admin_report_currency",t,e);return o()(r)},l=Object(n.createContext)(i)},530:function(e,t,r){"use strict";var n=r(0),c=r(2),s=r(1),o=r.n(s),a=r(22);function i(e){let{className:t}=e;const r=Object(c.__)("There was an error getting your stats. Please try again.",'woocommerce'),s=Object(c.__)("Reload",'woocommerce');return Object(n.createElement)(a.EmptyContent,{className:t,title:r,actionLabel:s,actionCallback:()=>{window.location.reload()}})}i.propTypes={className:o.a.string},t.a=i},570:function(e,t,r){},643:function(e,t,r){"use strict";r.r(t);var n=r(0),c=r(14),s=r(8),o=r(1),a=r.n(o),i=r(5),u=r(13),l=r(12),p=(r(570),r(173)),m=r(530),b=r(527),d=r(118);const j=e=>{let{params:t,path:r}=e;return t.report||r.replace(/^\/+/,"")};class O extends n.Component{constructor(){super(...arguments),this.state={hasError:!1}}componentDidCatch(e){this.setState({hasError:!0}),console.warn(e)}render(){if(this.state.hasError)return null;const{isError:e}=this.props;if(e)return Object(n.createElement)(m.a,null);const t=j(this.props),r=Object(i.find)(Object(d.a)(),{report:t});if(!r)return Object(n.createElement)(p.a,null);const c=r.component;return Object(n.createElement)(b.a.Provider,{value:Object(b.b)(Object(u.getQuery)())},Object(n.createElement)(c,this.props))}}O.propTypes={params:a.a.object.isRequired},t.default=Object(c.compose)(Object(s.withSelect)((e,t)=>{const r=Object(u.getQuery)(),{search:n}=r,c=e(l.ITEMS_STORE_NAME);if(!n)return{};const s=j(t),o=Object(u.getSearchWords)(r),a="categories"===s&&"single_category"===r.filter?"products":s,i=Object(l.searchItemsByString)(c,a,o,{per_page:100}),{isError:p,isRequesting:m,items:b}=i,d=Object.keys(b);return d.length?{isError:p,isRequesting:m,query:{...t.query,[a]:d.join(",")}}:{isError:p,isRequesting:m}}))(O)}}]);