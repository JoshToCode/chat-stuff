let cl=document.querySelector('.azs')
let fil= document.querySelector('.inv')
console.log(cl)
cl.addEventListener('click',()=>{
    
    fil.click()

})
fil.addEventListener('change',(e)=>{
  

 let file = e.target.files[0];
  
  if (file) {
  let hol=document.querySelector('.holder')
   hol.innerHTML=file.name

   
  }
});
