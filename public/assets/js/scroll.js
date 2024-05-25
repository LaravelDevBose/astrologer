window.onscroll = function(){
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){
    document.getElementById('scroll-wrapper').style.display='block';
  }
  else{
    document.getElementById('scroll-wrapper').style.display='none';
    
  }
}
  