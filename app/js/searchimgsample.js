var question = '';
var func;

function searchImages(keyword,callback){
  $.ajax({
    type : 'GET',
    url : 'imgsearch.php',
      data : {keyword: keyword, limit: 4},
    dataType : 'json',
    success : _getPhotos
  });
}

function _getPhotos(data){
    var dataStat = data.stat;
    if(dataStat == 'ok'){
    var imgs = new Array();

    $.each(data.info.photo, function(i, item){
      imgs.push(item.image_url);
    });

    func(quetion,imgs);
  }
}

function callApi(day,callback){
  func = callback;
  $.get("advent.php",{d: day},
    function(data){
      var getdata = JSON.parse(data);
      quetion = getdata.question;
      searchImages(getdata.tags);
    });
}
