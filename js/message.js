document.addEventListener("DOMContentLoaded", function () {
    var message=document.querySelector('#contact-form')
    var dispaly_message= message.querySelector("#message");

    if(message){
        message.addEventListener('submit',function (e){
                e.preventDefault();
                dispaly_message.innerHTML="";
                if(!message.classList.contains('loading')){
                    message.classList.add('loading');
                }
                $.ajax({
                    url: document.body.dataset.url,
                    type:"post",
                    data: {
                    action:'contact_message',
                    username:message.username.value,
                    email:message.email.value,
                    message:message.message.value,
                    subject:message.subject.value,
                    },
                    error:function (response) {
                        dispaly_message.innerHTML="Something went wrong"
                        message.reset();
                        message.classList.remove('loading');

                    },
                    success:function (response) {
                        dispaly_message.innerHTML="We have received your message. We will get back to you shortly."
                        message.reset();
                    message.classList.remove('loading');
                        
                    }
                    });
            })
    }
});