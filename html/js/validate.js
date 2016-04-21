Object.append(Browser.Features,{inputemail:function(){var e=document.createElement("input");return e.setAttribute("type","email"),"text"!==e.type}()});var JFormValidator=new Class({initialize:function(){this.handlers={},this.custom={},this.setHandler("username",function(e){return regex=/[<|>|"|'|%|;|(|)|&]/i,!regex.test(e)}),this.setHandler("password",function(e){return regex=/^\S[\S ]{2,98}\S$/,regex.test(e)}),this.setHandler("numeric",function(e){return regex=/^(\d|-)?(\d|,)*\.?\d*$/,regex.test(e)}),this.setHandler("email",function(e){return regex=/^[a-zA-Z0-9._-]+(\+[a-zA-Z0-9._-]+)*@([a-zA-Z0-9.-]+\.)+[a-zA-Z0-9.-]{2,4}$/,regex.test(e)}),$$("form.form-validate").each(function(e){this.attachToForm(e)},this)},setHandler:function(e,t,a){this.handlers[e]={enabled:""==a?!0:a,exec:t}},attachToForm:function(e){e.getElements("input,textarea,select,button").each(function(e){e.hasClass("required")&&(e.set("aria-required","true"),e.set("required","required")),"input"!=document.id(e).get("tag")&&"button"!=document.id(e).get("tag")||"submit"!=document.id(e).get("type")?(e.addEvent("blur",function(){return document.formvalidator.validate(this)}),e.hasClass("validate-email")&&Browser.Features.inputemail&&(e.type="email")):e.hasClass("validate")&&(e.onclick=function(){return document.formvalidator.isValid(this.form)})})},validate:function(e){if(e=document.id(e),e.get("disabled"))return this.handleResponse(!0,e),!0;if(e.hasClass("required"))if("fieldset"==e.get("tag")&&(e.hasClass("radio")||e.hasClass("checkboxes")))for(var t=0;;t++){if(!document.id(e.get("id")+t))return this.handleResponse(!1,e),!1;if(document.id(e.get("id")+t).checked)break}else if(!e.get("value"))return this.handleResponse(!1,e),!1;return t=e.className&&-1!=e.className.search(/validate-([a-zA-Z0-9\_\-]+)/)?e.className.match(/validate-([a-zA-Z0-9\_\-]+)/)[1]:"",""==t?(this.handleResponse(!0,e),!0):t&&"none"!=t&&this.handlers[t]&&e.get("value")&&1!=this.handlers[t].exec(e.get("value"))?(this.handleResponse(!1,e),!1):(this.handleResponse(!0,e),!0)},isValid:function(e){for(var t=!0,e=e.getElements("fieldset").concat(Array.from(e.elements)),a=0;a<e.length;a++)0==this.validate(e[a])&&(t=!1);return new Hash(this.custom).each(function(e){1!=e.exec()&&(t=!1)}),t},handleResponse:function(e,t){t.labelref||$$("label").each(function(e){e.get("for")==t.get("id")&&(t.labelref=e)}),0==e?(t.addClass("invalid"),t.set("aria-invalid","true"),t.labelref&&(document.id(t.labelref).addClass("invalid"),document.id(t.labelref).set("aria-invalid","true"))):(t.removeClass("invalid"),t.set("aria-invalid","false"),t.labelref&&(document.id(t.labelref).removeClass("invalid"),document.id(t.labelref).set("aria-invalid","false")))}});document.formvalidator=null,window.addEvent("domready",function(){document.formvalidator=new JFormValidator});
//# sourceMappingURL=maps/validate.js.map
