import{R as G,u as O,D as R,w as N,f as J}from"./links.C572zDFG.js";import{l as K}from"./license.w8vDmkyH.js";import{C as F,S as Q}from"./Caret.CGwYaMo_.js";import{C as T}from"./Card.CuS1kKeW.js";import{C as X}from"./Index.CgBueMQV.js";import{C as D,S as ee}from"./Upload.Y9sWUavO.js";import{C as te}from"./Tooltip.CRFjFnpF.js";import{S as se}from"./Plus.iqCbU08m.js";import{S as oe}from"./History.CiSHRGZ1.js";import{S as ie}from"./Refresh.BOWKUmyU.js";import{S as re}from"./index.CdwEuUIl.js";import{_ as E,w as le}from"./_plugin-vue_export-helper.BLXtEB-G.js";import{v as i,o as l,k as _,l as s,B as o,c as k,a as f,t as c,b as p,C as u,F as $,ac as A,aa as M}from"./runtime-core.esm-bundler.DMBo7TXk.js";import{G as I,a as U}from"./Row.CHjKxnPP.js";import{a as z}from"./allowed.DI27y-Lv.js";import{T as ne}from"./ToolsSettings.JVO-mgD6.js";import{B as j}from"./Checkbox.CxE2HV-P.js";import{S as L}from"./Download.CMBy5USU.js";import{C as ae}from"./Blur.tZiC08Rv.js";import{C as ce}from"./Index.fxoyLS1r.js";import{R as ue}from"./RequiredPlans.CWb7CJDQ.js";import"./default-i18n.Bd0Z306Z.js";import"./helpers.D5tYIqKS.js";import"./upperFirst.BGtMw2rr.js";import"./_stringToArray.DnK4tKcY.js";import"./toString.CkyAieyd.js";import"./Slide.D2pWF0rN.js";import"./params.B3T1WKlC.js";import"./Network.DKRH580j.js";import"./addons.tTxptju5.js";import"./Checkmark.DL3UTTgg.js";import"./constants.B6ynd7gz.js";const pe={setup(){return{backupsStore:G(),rootStore:O()}},components:{CoreAlert:F,CoreCard:T,CoreModal:X,CoreNetworkSiteSelector:D,CoreTooltip:te,SvgCirclePlus:se,SvgClose:Q,SvgHistory:oe,SvgRefresh:ie,SvgTrash:re},data(){return{site:null,timeout:null,backupToDelete:null,backupToRestore:null,backupsDeleteSuccess:!1,showModal:!1,backupsRestoreSuccess:!1,loading:!1,strings:{backupSettings:this.$t.__("Backup Settings",this.$td),areYouSureDeleteBackup:this.$t.__("Are you sure you want to delete this backup?",this.$td),areYouSureRestoreBackup:this.$t.__("Are you sure you want to restore this backup?",this.$td),yesDeleteBackup:this.$t.__("Yes, I want to delete this backup",this.$td),yesRestoreBackup:this.$t.__("Yes, I want to restore this backup",this.$td),noChangedMind:this.$t.__("No, I changed my mind",this.$td),actionCannotBeUndone:this.$t.__("This action cannot be undone.",this.$td),noBackups:this.$t.__("You have no saved backups.",this.$td),createBackup:this.$t.__("Create Backup",this.$td),restore:this.$t.__("Restore",this.$td),delete:this.$t.__("Delete",this.$td),backupSuccessfullyDeleted:this.$t.__("Success! The backup was deleted.",this.$td),backupSuccessfullyRestored:this.$t.__("Success! The backup was restored.",this.$td)}}},computed:{getBackups(){return this.site?this.backupsStore.networkBackups[this.site.blog_id]||[]:this.backupsStore.backups},areYouSure(){return this.backupToDelete?this.strings.areYouSureDeleteBackup:this.strings.areYouSureRestoreBackup},iAmSure(){return this.backupToDelete?this.strings.yesDeleteBackup:this.strings.yesRestoreBackup}},methods:{processCreateBackup(){this.loading=!0,this.backupsStore.createBackup({siteId:this.site?this.site.blog_id:null}).then(()=>{this.loading=!1})},maybeDeleteBackup(r){this.showModal=!0,this.backupToRestore=null,this.backupToDelete=r},maybeRestoreBackup(r){this.showModal=!0,this.backupToDelete=null,this.backupToRestore=r},processDeleteBackup(){this.loading=!0,this.backupsStore.deleteBackup({backup:this.backupToDelete,siteId:this.site?this.site.blog_id:null}).then(()=>{clearTimeout(this.timeout),this.loading=!1,this.showModal=!1,this.backupToDelete=null,this.backupsDeleteSuccess=!0,this.timeout=setTimeout(()=>{this.backupsDeleteSuccess=!1,this.backupsRestoreSuccess=!1},3e3)})},processRestoreBackup(){this.loading=!0,this.backupsStore.restoreBackup({backup:this.backupToRestore,siteId:this.site?this.site.blog_id:null}).then(()=>{clearTimeout(this.timeout),this.loading=!1,this.showModal=!1,this.backupToRestore=null,this.backupsRestoreSuccess=!0,this.timeout=setTimeout(()=>{this.backupsDeleteSuccess=!1,this.backupsRestoreSuccess=!1},3e3)})},getBackupName(r){const t=R.fromMillis(r*1e3).setZone(R.local().zoneName);return this.$t.sprintf(this.$t.__("%1$s at %2$s",this.$td),"<strong>"+t.toFormat("MMMM d, yyyy")+"</strong>","<strong>"+t.toFormat("h:mma ZZZZ")+"</strong>")},processBackupAction(){return this.backupToDelete?this.processDeleteBackup():this.processRestoreBackup()}}},de={key:0,class:"aioseo-settings-row"},me={class:"select-site"},_e={key:3,class:"aioseo-section-description"},he={key:4,class:"backups-table"},ge={class:"backups-rows"},fe=["innerHTML"],ke={class:"backup-actions"},be={class:"aioseo-modal-body"},Se=["innerHTML"];function ye(r,t,B,n,e,a){const S=i("svg-history"),y=i("core-network-site-selector"),d=i("core-alert"),b=i("svg-refresh"),g=i("core-tooltip"),v=i("svg-trash"),w=i("svg-circle-plus"),m=i("base-button"),C=i("svg-close"),h=i("core-modal"),V=i("core-card");return l(),_(V,{id:"aioseo-backup-settings",class:"aioseo-backup-settings",slug:"backupSettings",toggles:!1,"no-slide":"","header-text":e.strings.backupSettings},{"header-icon":s(()=>[o(S)]),default:s(()=>[n.rootStore.aioseo.data.isNetworkAdmin?(l(),k("div",de,[f("div",me,c(e.strings.selectSite),1),o(y,{onSelectedSite:t[0]||(t[0]=x=>e.site=x)})])):p("",!0),e.backupsDeleteSuccess?(l(),_(d,{key:1,type:"green"},{default:s(()=>[u(c(e.strings.backupSuccessfullyDeleted),1)]),_:1})):p("",!0),e.backupsRestoreSuccess?(l(),_(d,{key:2,type:"green"},{default:s(()=>[u(c(e.strings.backupSuccessfullyRestored),1)]),_:1})):p("",!0),a.getBackups.length?p("",!0):(l(),k("div",_e,c(e.strings.noBackups),1)),a.getBackups.length&&!(n.rootStore.aioseo.data.isNetworkAdmin&&!e.site)?(l(),k("div",he,[f("div",ge,[(l(!0),k($,null,A(a.getBackups,(x,P)=>(l(),k("div",{class:M(["backup-row",{even:P%2===0}]),key:P},[f("div",{class:"backup-name",innerHTML:a.getBackupName(x)},null,8,fe),f("div",ke,[o(g,{type:"action"},{tooltip:s(()=>[u(c(e.strings.restore),1)]),default:s(()=>[o(b,{onClick:Z=>a.maybeRestoreBackup(x)},null,8,["onClick"])]),_:2},1024),o(g,{type:"action"},{tooltip:s(()=>[u(c(e.strings.delete),1)]),default:s(()=>[o(v,{onClick:Z=>a.maybeDeleteBackup(x)},null,8,["onClick"])]),_:2},1024)])],2))),128))])])):p("",!0),o(m,{type:"blue",size:"medium",onClick:a.processCreateBackup,loading:e.loading,disabled:n.rootStore.aioseo.data.isNetworkAdmin&&!e.site},{default:s(()=>[o(w),u(" "+c(e.strings.createBackup),1)]),_:1},8,["onClick","loading","disabled"]),o(h,{show:e.showModal,"no-header":"",onClose:t[4]||(t[4]=x=>e.showModal=!1),classes:["aioseo-core-backup-settings-modal"]},{body:s(()=>[f("div",be,[f("button",{class:"close",onClick:t[2]||(t[2]=le(x=>e.showModal=!1,["stop"]))},[o(C,{onClick:t[1]||(t[1]=x=>e.showModal=!1)})]),f("h3",null,c(a.areYouSure),1),f("div",{class:"reset-description",innerHTML:e.strings.actionCannotBeUndone},null,8,Se),o(m,{type:"blue",size:"medium",onClick:a.processBackupAction},{default:s(()=>[u(c(a.iAmSure),1)]),_:1},8,["onClick"]),o(m,{type:"gray",size:"medium",onClick:t[3]||(t[3]=x=>e.showModal=!1)},{default:s(()=>[u(c(e.strings.noChangedMind),1)]),_:1})])]),_:1},8,["show"])]),_:1},8,["header-text"])}const Y=E(pe,[["render",ye]]),we={setup(){return{rootStore:O(),toolsStore:N()}},components:{BaseCheckbox:j,CoreCard:T,CoreNetworkSiteSelector:D,GridColumn:I,GridRow:U,SvgUpload:ee},mixins:[ne],data(){return{allowed:z,site:null,options:{},postOptions:{},loading:!1,strings:{selectSite:this.$t.__("Select Site",this.$td),exportSettings:this.$t.__("Export Settings",this.$td),allSettings:this.$t.__("Export All Settings",this.$td),allPostTypes:this.$t.__("Export All Post Types",this.$td)}}},computed:{canExport(){if(this.rootStore.aioseo.data.isNetworkAdmin&&!this.site)return!1;const r=[];return Object.keys(this.options).forEach(t=>{r.push(this.options[t])}),Object.keys(this.postOptions).forEach(t=>{r.push(this.postOptions[t])}),r.some(t=>t)},canExportPostOptions(){return["aioseo_page_general_settings","aioseo_page_advanced_settings","aioseo_page_schema_settings","aioseo_page_social_settings","aioseo_page_local_seo_settings"].some(r=>z(r))}},methods:{processExportSettings(){const r=[];this.options.all?(this.$isPro&&r.push("general"),r.push("internal"),this.toolsSettings.filter(n=>n.value!=="all").forEach(n=>{r.push(n.value)})):Object.keys(this.options).forEach(n=>{this.options[n]&&r.push(n)});const t=[];this.postOptions.all?this.rootStore.aioseo.postData.postTypes.forEach(n=>{t.push(n.name)}):Object.keys(this.postOptions).forEach(n=>{this.postOptions[n]&&t.push(n)});const B=this.site?`${this.site.domain}${this.site.path.replace("/","-")}`:"";this.loading=!0,this.toolsStore.exportSettings({settings:r,postOptions:t,siteId:this.site?this.site.blog_id:null}).then(n=>{this.loading=!1,this.options={},this.postOptions={};const e=new Blob([JSON.stringify(n.body.settings)],{type:"application/json"}),a=document.createElement("a");a.href=URL.createObjectURL(e),a.download=`aioseo-export-settings-${B}${R.now().toFormat("yyyy-MM-dd")}.json`,a.click(),URL.revokeObjectURL(a.href)})}}},ve={key:0,class:"aioseo-settings-row"},xe={class:"select-site"},Ce={key:1,class:"export-post-types"};function Be(r,t,B,n,e,a){const S=i("svg-upload"),y=i("core-network-site-selector"),d=i("base-checkbox"),b=i("grid-column"),g=i("grid-row"),v=i("base-button"),w=i("core-card");return l(),_(w,{class:"aioseo-export-settings",slug:"exportSettings",toggles:!1,"no-slide":"","header-text":e.strings.exportSettings},{"header-icon":s(()=>[o(S)]),default:s(()=>[n.rootStore.aioseo.data.isNetworkAdmin?(l(),k("div",ve,[f("div",xe,c(e.strings.selectSite),1),o(y,{onSelectedSite:t[0]||(t[0]=m=>e.site=m)})])):p("",!0),f("div",{class:M(["export-settings",{"aioseo-settings-row":a.canExportPostOptions}])},[o(g,null,{default:s(()=>[o(b,{class:"export-all"},{default:s(()=>[o(d,{size:"medium",modelValue:e.options.all,"onUpdate:modelValue":t[1]||(t[1]=m=>e.options.all=m),disabled:n.rootStore.aioseo.data.isNetworkAdmin&&!e.site},{default:s(()=>[u(c(e.strings.allSettings),1)]),_:1},8,["modelValue","disabled"])]),_:1}),(l(!0),k($,null,A(r.toolsSettings,(m,C)=>(l(),_(b,{key:C,sm:"6"},{default:s(()=>[e.options.all?p("",!0):(l(),_(d,{key:0,size:"medium",modelValue:e.options[m.value],"onUpdate:modelValue":h=>e.options[m.value]=h,disabled:n.rootStore.aioseo.data.isNetworkAdmin&&!e.site},{default:s(()=>[u(c(m.label),1)]),_:2},1032,["modelValue","onUpdate:modelValue","disabled"])),m.value!=="all"&&e.options.all?(l(),_(d,{key:1,size:"medium",modelValue:!0,disabled:""},{default:s(()=>[u(c(m.label),1)]),_:2},1024)):p("",!0)]),_:2},1024))),128))]),_:1})],2),a.canExportPostOptions?(l(),k("div",Ce,[o(g,null,{default:s(()=>[o(b,{class:"export-all"},{default:s(()=>[o(d,{size:"medium",modelValue:e.postOptions.all,"onUpdate:modelValue":t[2]||(t[2]=m=>e.postOptions.all=m),disabled:n.rootStore.aioseo.data.isNetworkAdmin&&!e.site},{default:s(()=>[u(c(e.strings.allPostTypes),1)]),_:1},8,["modelValue","disabled"])]),_:1}),(l(!0),k($,null,A(n.rootStore.aioseo.postData.postTypes,(m,C)=>(l(),_(b,{key:C,sm:"6"},{default:s(()=>[e.postOptions.all?p("",!0):(l(),_(d,{key:0,size:"medium",modelValue:e.postOptions[m.name],"onUpdate:modelValue":h=>e.postOptions[m.name]=h,disabled:n.rootStore.aioseo.data.isNetworkAdmin&&!e.site},{default:s(()=>[u(c(m.label),1)]),_:2},1032,["modelValue","onUpdate:modelValue","disabled"])),m.name!=="all"&&e.postOptions.all?(l(),_(d,{key:1,size:"medium",modelValue:!0,disabled:""},{default:s(()=>[u(c(m.label),1)]),_:2},1024)):p("",!0)]),_:2},1024))),128))]),_:1})])):p("",!0),o(v,{type:"blue",size:"medium",class:"import",onClick:a.processExportSettings,disabled:!a.canExport,loading:e.loading},{default:s(()=>[u(c(e.strings.exportSettings),1)]),_:1},8,["onClick","disabled","loading"])]),_:1},8,["header-text"])}const q=E(we,[["render",Be]]),Ee={setup(){return{rootStore:O(),toolsStore:N()}},components:{CoreAlert:F,CoreCard:T,CoreNetworkSiteSelector:D,SvgDownload:L},data(){return{site:null,inputFile:null,filename:null,file:null,uploadError:!1,uploadSuccess:!1,loading:!1,strings:{selectSite:this.$t.__("Select Site",this.$td),importRestoreAioseoSettings:this.$t.sprintf(this.$t.__("Import / Restore %1$s Settings",this.$td),"AIOSEO"),fileUploadPlaceholder:this.$t.__("Import from a JSON or INI file...",this.$td),chooseAFile:this.$t.__("Choose a File",this.$td),fileUploadDescription:this.$t.__("Imported settings will overwrite existing settings and will not be merged.",this.$td),import:this.$t.__("Import",this.$td),jsonFileTypeRequired:this.$t.__("A JSON or INI file is required to import settings.",this.$td),fileUploadedSuccessfully:this.$t.__("Success! Your settings have been imported.",this.$td),fileUploadFailed:this.$t.__("There was an error importing your settings. Please make sure you are uploading the correct file or it is in the proper format.",this.$td),v3ImportWarning:this.$t.sprintf(this.$t.__("Please note that if you are importing post/term meta from %1$s v3.7.1 or below, this will only be successful if the post/term IDs of this site are identical to those of the source site.",this.$td),"AIOSEO")}}},computed:{importValidated(){return!(this.rootStore.aioseo.data.isNetworkAdmin&&!this.site||!this.file.type||!this.file.name||this.file.type!=="application/json"&&!this.file.name.endsWith(".ini"))}},methods:{reset(){this.uploadError=!1,this.filename=null,this.file=null,this.inputFile=null},triggerFileUpload(){this.reset(),this.$refs.file.$el.querySelector("input").focus(),this.$refs.file.$el.querySelector("input").click()},submitFile(){this.loading=!0,this.toolsStore.uploadFile({file:this.file,filename:this.filename,siteId:this.site?this.site.blog_id:null}).then(()=>{this.reset(),this.uploadSuccess=!0,this.loading=!1}).catch(()=>{this.reset(),this.loading=!1,this.uploadError=this.strings.fileUploadFailed})},handleFileUpload(){this.reset(),this.file=this.$refs.file.$el.querySelector("input").files[0],this.file&&(this.filename=this.file.name,this.file.type!=="application/json"&&!this.file.name.endsWith(".ini")&&(this.uploadError=this.strings.jsonFileTypeRequired))}}},Oe={key:0,class:"aioseo-settings-row"},$e={class:"select-site"},Ae={class:"file-upload"},Te={class:"aioseo-description"};function De(r,t,B,n,e,a){const S=i("svg-download"),y=i("core-network-site-selector"),d=i("core-alert"),b=i("base-input"),g=i("base-button"),v=i("core-card");return l(),_(v,{class:"aioseo-import-aioseo",slug:"importAioseoSettings",toggles:!1,"no-slide":"","header-text":e.strings.importRestoreAioseoSettings},{"header-icon":s(()=>[o(S)]),default:s(()=>[n.rootStore.aioseo.data.isNetworkAdmin?(l(),k("div",Oe,[f("div",$e,c(e.strings.selectSite),1),o(y,{onSelectedSite:t[0]||(t[0]=w=>e.site=w)})])):p("",!0),e.uploadError?(l(),_(d,{key:1,type:"red",class:"import-alert"},{default:s(()=>[u(c(e.uploadError),1)]),_:1})):p("",!0),e.filename&&e.filename.endsWith(".ini")?(l(),_(d,{key:2,type:"yellow",class:"import-alert"},{default:s(()=>[u(c(e.strings.v3ImportWarning),1)]),_:1})):p("",!0),e.uploadSuccess?(l(),_(d,{key:3,type:"green",class:"import-alert"},{default:s(()=>[u(c(e.strings.fileUploadedSuccessfully),1)]),_:1})):p("",!0),f("div",Ae,[o(b,{modelValue:e.filename,"onUpdate:modelValue":t[1]||(t[1]=w=>e.filename=w),size:"medium",onFocus:a.triggerFileUpload,placeholder:e.strings.fileUploadPlaceholder,class:M({"aioseo-error":e.uploadError}),disabled:n.rootStore.aioseo.data.isNetworkAdmin&&!e.site},null,8,["modelValue","onFocus","placeholder","class","disabled"]),o(g,{type:"black",size:"medium",onClick:a.triggerFileUpload,disabled:n.rootStore.aioseo.data.isNetworkAdmin&&!e.site},{default:s(()=>[u(c(e.strings.chooseAFile),1)]),_:1},8,["onClick","disabled"])]),o(b,{modelValue:e.inputFile,"onUpdate:modelValue":t[2]||(t[2]=w=>e.inputFile=w),type:"file",onClick:a.reset,onChange:a.handleFileUpload,ref:"file"},null,8,["modelValue","onClick","onChange"]),f("div",Te,c(e.strings.fileUploadDescription),1),o(g,{type:"blue",size:"medium",class:"import",onClick:a.submitFile,disabled:!e.file||!a.importValidated,loading:e.loading},{default:s(()=>[u(c(e.strings.import),1)]),_:1},8,["onClick","disabled","loading"])]),_:1},8,["header-text"])}const H=E(Ee,[["render",De]]),Ie={setup(){return{rootStore:O(),toolsStore:N()}},components:{BaseCheckbox:j,CoreAlert:F,CoreCard:T,CoreNetworkSiteSelector:D,GridColumn:I,GridRow:U,SvgDownload:L},data(){return{site:null,importSuccess:!1,importError:!1,options:{},plugin:null,loading:!1,strings:{selectSite:this.$t.__("Select Site",this.$td),importSettingsFromOtherPlugins:this.$t.__("Import Settings From Other Plugins",this.$td),importOthersDescription:this.$t.sprintf(this.$t.__("Choose a plugin to import SEO data directly into %1$s.",this.$td),"AIOSEO"),selectPlugin:this.$t.__("Select a plugin...",this.$td),import:this.$t.__("Import",this.$td),allSettings:this.$t.__("All Settings",this.$td),notInstalled:this.$t.__("not installed",this.$td)}}},watch:{plugin(){this.importSuccess=!1,this.importError=!1,this.options={}}},computed:{settings(){const r=[{value:"settings",label:this.$t.__("SEO Settings",this.$td)},{value:"postMeta",label:this.$t.__("Post Meta",this.$td)}];return this.$isPro&&r.push({value:"termMeta",label:this.$t.__("Term Meta",this.$td)}),r},plugins(){const r=[];return this.rootStore.aioseo.importers.forEach(t=>{r.push({value:t.slug,label:t.name,canImport:t.canImport,version:t.version,$isDisabled:!t.installed})}),r},canImport(){if(this.rootStore.aioseo.data.isNetworkAdmin&&!this.site)return!1;const r=[];return Object.keys(this.options).forEach(t=>{r.push(this.options[t])}),r.some(t=>t)},importSuccessful(){return this.$t.sprintf(this.$t.__("%1$s was successfully imported!",this.$td),this.plugin.label)},importErrorMessage(){return this.$t.sprintf(this.$t.__("An error occurred while importing %1$s. Please try again.",this.$td),this.plugin.label)}},methods:{processImportPlugin(){this.importSuccess=!1,this.importError=!1,this.loading=!0;const r=[];this.options.all?this.settings.filter(t=>t.value!=="all").forEach(t=>{r.push(t.value)}):Object.keys(this.options).forEach(t=>{this.options[t]&&r.push(t)}),this.toolsStore.importPlugins({plugins:[{plugin:this.plugin.value,settings:r}],siteId:this.site?this.site.blog_id:null}).then(()=>{this.loading=!1,this.importSuccess=!0,this.options={}}).catch(()=>{this.loading=!1,this.importError=!0,this.options={}})},invalidVersion(r){return this.$t.sprintf(this.$t.__("We do not support importing from the currently installed version of %1$s (%2$s). Please upgrade to the latest version and try again.",this.$td),r.label,r.version)}}},Ue={key:0,class:"aioseo-settings-row"},Ve={class:"select-site"},Re={class:"aioseo-section-description"},Ne={class:"import-plugin-label"},Fe={class:"plugin-label"},Me={key:0,class:"plugin-status"},Pe={key:3,class:"import-settings"};function ze(r,t,B,n,e,a){const S=i("svg-download"),y=i("core-network-site-selector"),d=i("core-alert"),b=i("base-select"),g=i("base-checkbox"),v=i("grid-column"),w=i("grid-row"),m=i("base-button"),C=i("core-card");return l(),_(C,{id:"aioseo-import-others",class:"aioseo-import-others",slug:"importOtherPlugins",toggles:!1,"no-slide":"","header-text":e.strings.importSettingsFromOtherPlugins},{"header-icon":s(()=>[o(S)]),default:s(()=>[n.rootStore.aioseo.data.isNetworkAdmin?(l(),k("div",Ue,[f("div",Ve,c(e.strings.selectSite),1),o(y,{onSelectedSite:t[0]||(t[0]=h=>e.site=h)})])):p("",!0),f("div",Re,c(e.strings.importOthersDescription),1),e.importSuccess?(l(),_(d,{key:1,class:"import-success",type:"green"},{default:s(()=>[u(c(a.importSuccessful),1)]),_:1})):p("",!0),e.importError?(l(),_(d,{key:2,class:"import-error",type:"red"},{default:s(()=>[u(c(a.importErrorMessage),1)]),_:1})):p("",!0),o(b,{size:"medium",modelValue:e.plugin,"onUpdate:modelValue":t[1]||(t[1]=h=>e.plugin=h),options:a.plugins,placeholder:e.strings.selectPlugin,disabled:n.rootStore.aioseo.data.isNetworkAdmin&&!e.site},{option:s(({option:h})=>[f("div",Ne,[f("span",Fe,c(h.label),1),h.$isDisabled?(l(),k("span",Me,c(e.strings.notInstalled),1)):p("",!0)])]),_:1},8,["modelValue","options","placeholder","disabled"]),e.plugin?(l(),k("div",Pe,[e.plugin.canImport?(l(),_(w,{key:0},{default:s(()=>[o(v,null,{default:s(()=>[o(g,{size:"medium",modelValue:e.options.all,"onUpdate:modelValue":t[2]||(t[2]=h=>e.options.all=h)},{default:s(()=>[u(c(e.strings.allSettings),1)]),_:1},8,["modelValue"])]),_:1}),(l(!0),k($,null,A(a.settings,(h,V)=>(l(),_(v,{key:V,sm:"6"},{default:s(()=>[e.options.all?p("",!0):(l(),_(g,{key:0,size:"medium",modelValue:e.options[h.value],"onUpdate:modelValue":x=>e.options[h.value]=x},{default:s(()=>[u(c(h.label),1)]),_:2},1032,["modelValue","onUpdate:modelValue"])),h.value!=="all"&&e.options.all?(l(),_(g,{key:1,size:"medium",modelValue:!0,disabled:""},{default:s(()=>[u(c(h.label),1)]),_:2},1024)):p("",!0)]),_:2},1024))),128))]),_:1})):p("",!0),e.plugin.canImport?p("",!0):(l(),_(d,{key:1,type:"red"},{default:s(()=>[u(c(a.invalidVersion(e.plugin)),1)]),_:1}))])):p("",!0),o(m,{type:"blue",size:"medium",class:"import",onClick:a.processImportPlugin,disabled:!e.plugin||!a.canImport,loading:e.loading},{default:s(()=>[u(c(e.strings.import),1)]),_:1},8,["onClick","disabled","loading"])]),_:1},8,["header-text"])}const W=E(Ie,[["render",ze]]),je={components:{BackupSettings:Y,GridColumn:I,GridRow:U,ExportSettings:q,ImportAioseo:H,ImportOthers:W}},Le={class:"aioseo-tools-import-export"};function Ye(r,t,B,n,e,a){const S=i("import-aioseo"),y=i("import-others"),d=i("grid-column"),b=i("export-settings"),g=i("grid-row"),v=i("backup-settings");return l(),k("div",Le,[o(g,null,{default:s(()=>[o(d,{md:"6"},{default:s(()=>[o(S),o(y)]),_:1}),o(d,{md:"6"},{default:s(()=>[o(b)]),_:1})]),_:1}),o(g,null,{default:s(()=>[o(d,null,{default:s(()=>[o(v)]),_:1})]),_:1})])}const qe=E(je,[["render",Ye]]),He={components:{RequiredPlans:ue,BackupSettings:Y,CoreBlur:ae,Cta:ce,GridColumn:I,GridRow:U,ExportSettings:q,ImportAioseo:H,ImportOthers:W},data(){return{strings:{ctaHeader:this.$t.sprintf(this.$t.__("Network Tools is a %1$s Feature",this.$td),"PRO"),ctaButtonText:this.$t.__("Unlock Network Tools",this.$td),networkDatabaseToolsDescription:this.$t.__("Unlock network-level tools to manage all your sites from one easy-to-use location. Migrate data or create backups without the need to visit each dashboard.",this.$td)}}}},We={class:"aioseo-tools-import-export"};function Ze(r,t,B,n,e,a){const S=i("import-aioseo"),y=i("import-others"),d=i("grid-column"),b=i("export-settings"),g=i("grid-row"),v=i("backup-settings"),w=i("core-blur"),m=i("required-plans"),C=i("cta");return l(),k("div",We,[o(w,null,{default:s(()=>[o(g,null,{default:s(()=>[o(d,{md:"6"},{default:s(()=>[o(S),o(y)]),_:1}),o(d,{md:"6"},{default:s(()=>[o(b)]),_:1})]),_:1}),o(g,null,{default:s(()=>[o(d,null,{default:s(()=>[o(v)]),_:1})]),_:1})]),_:1}),o(C,{"cta-link":r.$links.getPricingUrl("network-tools","import-export"),"button-text":e.strings.ctaButtonText,"learn-more-link":r.$links.getUpsellUrl("network-tools","import-export",r.$isPro?"pricing":"liteUpgrade")},{"header-text":s(()=>[u(c(e.strings.ctaHeader),1)]),description:s(()=>[o(m,{"core-feature":["tools","network-tools-import-export"]}),u(" "+c(e.strings.networkDatabaseToolsDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link"])])}const Ge=E(He,[["render",Ze]]),Je={setup(){return{licenseStore:J(),rootStore:O()}},components:{ImportExport:qe,LiteImportExport:Ge},data(){return{license:K}}};function Ke(r,t,B,n,e,a){const S=i("import-export",!0),y=i("lite-import-export");return l(),k("div",null,[!n.rootStore.aioseo.data.isNetworkAdmin||!n.licenseStore.isUnlicensed&&e.license.hasCoreFeature("tools","network-tools-import-export")?(l(),_(S,{key:0})):p("",!0),n.rootStore.aioseo.data.isNetworkAdmin&&(n.licenseStore.isUnlicensed||!e.license.hasCoreFeature("tools","network-tools-import-export"))?(l(),_(y,{key:1})):p("",!0)])}const At=E(Je,[["render",Ke]]);export{At as default};
