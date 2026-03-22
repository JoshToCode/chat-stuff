const send=document.querySelector('.az')
const zo=document.querySelector('.holder')

send.addEventListener('click',()=>{
   
const text=document.querySelector('.rp').value
const user2=document.querySelector('.nbm').id
const user1=document.querySelector('.dude').id



const val={
   'id1':user1,
   'id2':user2,
   'text':text,
   'file':zo,
   'write':true
}

if (text.length===0 && zo.innerHTML.length===0) {
   alert('noting is found')
}
else{
 document.querySelector('.rp').value=''
   fetch('chats.php', {
      method:'POST',
      headers:{'Content-Type':'application/json'},
      body:JSON.stringify(val)
   }).then((e)=>{
   return e.json()
   }).then((t)=>{
 
    
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
   const user2=document.querySelector('.nbm').id

const user1=document.querySelector('.dude').id

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
      
     talk(h,user1)
   })


},3000)
 




function talk(rep,id1){

   const chats=document.querySelector('.chat_container')
   chats.innerHTML='';

  rep.forEach(co => {
  if (co['user1_id']==id1) {
  const daddy=  document.createElement('div')
  daddy.className='chatR'
  const mommy=document.createElement('div')
  mommy.className='hot'
  const child=document.createElement('p')
  child.className='ones'
  child.innerHTML=co['content']
 mommy.appendChild(child)
 daddy.appendChild(mommy)


 chats.appendChild(daddy)


  }else{


   
   const daddy1=document.createElement('div')
   daddy1.className='chatL'
   const mommy1=document.createElement('p')
   mommy1.className='one'
   mommy1.innerHTML=co['content']
   daddy1.appendChild(mommy1)
   chats.appendChild(daddy1)
  }
  });
}