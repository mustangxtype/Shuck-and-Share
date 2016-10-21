$(document).ready(function() {

  var app = new Clarifai.App(
    //insert own API Keys here
  );

  //This is an auto alt generator to help screenreaders give a
  //better understanding of what is in the picture
  $("img").each(function(){
    var img = this;
    var src = img.src.split('/');
    var file = src[src.length - 1];

    if(file === img.alt){
      //'https://samples.clarifai.com/metro-north.jpg'
      app.models.predict(Clarifai.GENERAL_MODEL, this.src).then(
      function(response) {
        img.alt = response.data.outputs[0].data.concepts[0].name;
        for(var x = 1; x < 5; x++){
          img.alt += " " + response.data.outputs[0].data.concepts[x].name;
        }
      },
      function(err) {
        console.error(err);
      }
    );
    }
    console.log("should be replaced");

  });

});
