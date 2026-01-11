const send=document.querySelector('.az')
send.addEventListener('click',()=>{
const text=document.querySelector('.rp').value
const user2=document.querySelector('.ech').innerHTML
const user1=document.querySelector('.dude').innerHTML

const val={
   'id1':user1,
   'id2':user2,
   'text':text,
   'write':true
}

if (text.length===0) {
   alert('noting is found')
}
else{
 
   fetch('chats.php', {
      method:'POST',
      headers:{'Content-Type':'application/json'},
      body:JSON.stringify(val)
   }).then((e)=>{
   return e.json()
   }).then((t)=>{
   console.log(t)
   })
   createEle(text)
}
})

function createEle(con) {
   let cont=document.querySelector('.chat_container')

 let ele=  document.createElement('p')
 ele.className='ones'
ele.innerHTML=con

 let tex=document.createElement('div')
 tex.className='chatR'

 let tes=document.createElement('div')
 tes.appendChild(ele)
 tex.appendChild(tes)
cont.appendChild(tex)

}


setInterval(()=>{
   const user2=document.querySelector('.ech').innerHTML
const user1=document.querySelector('.dude').innerHTML

const id={
   'id1':user1,
   'id2':user2,
   'text':'',
   'write':false
}
fetch('chats.php',{
   'method':'POST',
   'headers':{'content-type':'application/json'},
      body:JSON.stringify(id)
})
.then((d)=>{
return d.json()
   })
   .then((h)=>{
      talk(h)
   })


},2000)



function talk(rep){
   let contra=document.querySelector('.chat_container')
rep.forEach(sub => {
     const user2=document.querySelector('.ech').innerHTML
const user1=document.querySelector('.dude').innerHTML
let ty; let st;
console.log(sub['user1_id'])
if (sub['user1_id']==user1) {
    st=`<div class="chatR">
   <div>
    <p class="ones">${sub['content']}</p>
    <p class="t">10:30am</p>
   </div>
</div>
`
}else{
   
 ty=`<div class="chatL">
   <p class="one">${sub['content']}</p>
   <p class="t">10:30am</p>
 </div>`
}

contra.innerHTML+=st

});
}