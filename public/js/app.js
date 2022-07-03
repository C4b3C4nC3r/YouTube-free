/**
 * 
 * APP 
 * JS SIMPLE
*/

const removeFormData = [
]


$("form").on("submit",function(e){
    e.preventDefault();
    object = {};

    formdata = new FormData($(this)[0]);
    formdata.forEach((value, key) => {        
        if(!removeFormData.includes(key)){
            object[key] = value
            //console.log(key);
        }
        
    })

    $.post(window.location+"/login",object,(res)=>{
        console.log(res);
    })
})

