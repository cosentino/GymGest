(function(c,b,a,d){c(a).ready(function(){if(c.fn.wizard){c("#wizard-demo-1").wizard();if(c.fn.validate){$wzd_form=c("#wizard-demo-2").validate({onsubmit:false});c("#wizard-demo-2").wizard({onStepLeave:function(f,e){return $wzd_form.form()},onBeforeSubmit:function(){return $wzd_form.form()}});$wzd_v_form=c("#wizard-demo-3").validate({onsubmit:false});c("#wizard-demo-3").wizard({onStepLeave:function(f,e){return $wzd_v_form.form()},onBeforeSubmit:function(){return $wzd_v_form.form()}});$wzd_v1_form=c("#wizard-demo-4").validate({onsubmit:false});c("#wizard-demo-4").wizard({onStepLeave:function(f,e){return $wzd_v1_form.form()},onBeforeSubmit:function(){return $wzd_v1_form.form()},ajaxSubmit:true,ajaxOptions:{dataType:"text",beforeSubmit:function(e){alert("You're about to submit:\n\n"+c.param(e));return true},success:function(f,e,h,g){if(confirm("Form successfully submitted.\nServer Response:\n"+f+"\n\nReset Wizard?")){g.wizard("reset");$wzd_v1_form.resetForm()}}}})}}})})(jQuery,window,document);