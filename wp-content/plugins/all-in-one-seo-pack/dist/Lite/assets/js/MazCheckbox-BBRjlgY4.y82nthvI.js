import{f as _,E as g,g as o,o as A,c as C,a as i,B,u as t,C as $,H as m,q as N,k as P,V as S}from"./vue.esm-bundler.CWQFYt9y.js";import{A as w,P as I}from"./Phone.icwalScR.js";import D from"./check-7UA4j2f2.CN8Bmm-w.js";import"./links.cMjoa9mX.js";import"./default-i18n.Bd0Z306Z.js";import"./helpers.D2xRWOvn.js";import"./preload-helper.M0ZNWaht.js";import"./_plugin-vue_export-helper.BN1snXvA.js";const E=["for","aria-checked"],H=["id","checked","disabled","name"],K=_({inheritAttrs:!1,__name:"MazCheckbox",props:{style:{default:void 0},class:{default:void 0},modelValue:{type:[Boolean,Array],default:void 0},id:{default:void 0},color:{default:"primary"},value:{type:[String,Number,Boolean],default:void 0},name:{default:"m-checkbox"},size:{default:"md"},disabled:{type:Boolean,default:!1}},emits:["update:model-value","change"],setup(p,{emit:f}){g(a=>({b8e5fc84:x.value,"01c73ce0":y.value,"911738ee":h.value,"108a1568":V.value}));const v=S(),e=p,r=f,n=I({componentName:"MazCheckbox",instance:v,providedId:e.id}),s=o(()=>typeof e.value!="boolean"&&Array.isArray(e.modelValue)?e.modelValue.includes(e.value):typeof e.modelValue=="boolean"?e.modelValue:!1),y=o(()=>{switch(e.size){case"xl":return"2.25rem";case"lg":return"2rem";default:return"1.625rem";case"sm":return"1.425rem";case"xs":return"1.325rem";case"mini":return"1.2rem"}}),b=o(()=>{switch(e.size){case"xl":return"maz-text-2xl";case"lg":return"maz-text-xl";default:return"maz-text-lg";case"sm":return"maz-text-base";case"xs":return"maz-text-sm";case"mini":return"maz-text-xs"}}),x=o(()=>`var(--maz-color-${e.color}-contrast)`),h=o(()=>`var(--maz-color-${e.color})`),V=o(()=>["black","transparent"].includes(e.color)?"var(--maz-color-muted)":`var(--maz-color-${e.color}-alpha)`);function z(a){["Space"].includes(a.code)&&(a.preventDefault(),u(e.value??!e.modelValue))}function k(a){return typeof a=="boolean"&&(typeof e.modelValue=="boolean"||e.modelValue===void 0||e.modelValue===null)?!e.modelValue:Array.isArray(e.modelValue)&&typeof a!="boolean"?e.modelValue.includes(a)?e.modelValue.filter(l=>l!==a):[...e.modelValue,a]:[a]}function u(a){const l=k(a);r("update:model-value",l),r("change",l)}return(a,l)=>(A(),C("label",{for:t(n),class:m(["m-checkbox",[{"--disabled":a.disabled},e.class]]),tabindex:"0",style:P(a.style),role:"checkbox","aria-checked":s.value,onKeydown:z},[i("input",B({id:t(n),checked:s.value},a.$attrs,{tabindex:"-1",disabled:a.disabled,name:a.name,type:"checkbox",onChange:l[0]||(l[0]=c=>{var d;return u(a.value??((d=c==null?void 0:c.target)==null?void 0:d.checked))})}),null,16,H),i("span",null,[$(t(D),{class:m(["check-icon",b.value])},null,8,["class"])]),N(a.$slots,"default",{},void 0,!0)],46,E))}}),J=w(K,[["__scopeId","data-v-41945bef"]]);export{J as default};
