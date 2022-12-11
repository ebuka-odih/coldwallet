var app=function(e){"use strict";function t(e){return document.getElementById(e)}function o(e,t,o,s){void 0===s&&(s=!1),document.querySelector(e).addEventListener(t,o,s)}HTMLElement.prototype.toggle_class=function(e,t){e?this.classList.add(t):this.classList.remove(t)},HTMLElement.prototype.show=function(){this.classList.remove("hidden")},HTMLElement.prototype.hide=function(){this.classList.add("hidden")};const s=t("password-eye-closed"),n=t("password-eye-open"),i=document.querySelector("button[type=submit]"),a=document.querySelector("input[name=Password]");const d=t("nav-burger"),r=t("nav-cross"),c=t("nav-side"),l=t("nav-main");let u=void 0!==document.cookie.split("; ").find((e=>e.startsWith("AllowCookies")));const p=t("cookies");return window.addEventListener("scroll",(function(){window.scrollY>70?l.classList.add("nav-background","shadow-nav"):l.classList.remove("nav-background","shadow-nav")})),window.addEventListener("load",(()=>{u?p.classList.remove("cookie-fade"):p.classList.add("cookie-fade")})),t("nav-mobile").addEventListener("click",(function(){d.classList.toggle("hidden"),r.classList.toggle("hidden"),c.classList.toggle("w-full"),l.style.boxShadow="none"===l.style.boxShadow?"":"none"})),o("#accept-cookies","click",(e=>{e.preventDefault();const t=new Date;var o,s;t.setFullYear(t.getFullYear()+2),document.cookie="AllowCookies=true; expires="+t.toGMTString(),u=!0,p.classList.remove("cookie-fade"),o=document.getElementsByTagName("head")[0],(s=document.createElement("script")).src="src/js/adroll.js",o.appendChild(s)})),window.recaptcha_success=function(){i.disabled=!1,i.classList.add("btn-green"),i.classList.add("cursor-pointer")},window.recaptcha_reset=function(){i.disabled=!0,i.classList.remove("btn-green"),i.classList.remove("cursor-pointer")},HTMLInputElement.prototype.reportValidity||(HTMLInputElement.prototype.reportValidity=function(){return!!this.checkValidity()||(alert(this.validationMessage),!1)}),HTMLFormElement.prototype.reportValidity||(HTMLFormElement.prototype.reportValidity=function(){if(this.checkValidity())return!0;var e=document.createElement("button");return this.appendChild(e),e.click(),this.removeChild(e),!1}),e.add_event=o,e.show_hide_password=function(){"password"===a.type?(a.type="text",s.hide(),n.show()):(a.type="password",s.show(),n.hide())},e.validate_password=function(e){return/[0-9]/g.test(e)&&/[^a-zA-Z0-9]/g.test(e)&&/[A-Z]/g.test(e)&&!/[<>&#]/g.test(e)},Object.defineProperty(e,"__esModule",{value:!0}),e}({});