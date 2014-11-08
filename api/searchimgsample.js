var question = '';
var func;

function searchImages(keyword,callback){
  $.ajax({
    type : 'GET',
    url : 'http://v157-7-72-80.z1d10.static.cnode.jp:8080/imgsearch.php',
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
  $.get("http://v157-7-72-80.z1d10.static.cnode.jp:8080/advent.php",{d: day},
    function(data){
      var getdata = JSON.parse(data);
      quetion = getdata.question;
      searchImages(getdata.tags);
    });
}
