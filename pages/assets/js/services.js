  
  
   $('#click').on('click', function(event) {
        var red = document.getElementById("acc").value;
        console.log(red);
        window.location.href = `/pages/services.html#${red}`;
    //  alert('You clicked the Bootstrap Card');
});