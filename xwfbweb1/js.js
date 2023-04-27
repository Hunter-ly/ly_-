$(document).ready(function(){
    var xhr=null;
    $('input[name="keyword"]').keyup(function() {
        if(xhr){
            xhr.abort();//如果存在ajax的请求，就放弃请求
        }
        var inputText= $.trim(this.value);
        if(inputText!=""){
            //检测键盘输入的内容是否为空，为空就不发出请求
            xhr=$.ajax({
                type: 'GET',
                url: 'service/suggestion.php',
                cache:false,//不从浏览器缓存中加载请求信息
                data: "keyword=" + inputText,//向服务器端发送的数据
                dataType: 'json',//服务器返回数据的类型为json
                success: function (json) {
                    if (json.length != 0) {//检测返回的结果是否为空
                        var lists = "<ul>";
                        $.each(json, function () {
                            lists += "<li>"+this.pd_name+"</li>";//遍历出每一条返回的数据
                        });
                        lists+="</ul>";
                        $("#searchBox").html(lists).show();//将搜索到的结果展示出来
                        $("li").click(function(){
                            $("#keyword").val($(this).text());//点击某个li就会获取当前的值
                            $("#searchBox").hide();
                        })
                    } else {
                        $("#searchBox").hide();
                    }
                }
            });
        }else{
            $("#searchBox").hide();//没有查询结果就隐藏搜索框
        }
    }).blur(function(){
        $("#searchBox").hide();//输入框失去焦点的时候就隐藏搜索框
    });
});