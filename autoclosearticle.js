window.addEventListener("load", function(){ // do after page loaded
  document.getElementById("headlines-frame").addEventListener('scroll', function() {
    Article.close();
  });
});
