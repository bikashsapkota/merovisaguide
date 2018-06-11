<div style="padding-top: 100px" >
    <h3 class="theme-color-text">Recent Posts</h3>

    <ul class="list-group clear-list">
       
    </ul>
    <div class="text-center m-t-md">
        <a href="#" class="btn btn-xs btn-primary">More</a>
    </div>
</div>
<script type="text/javascript">
    $.get( "/api/recent/post", function(data) {
        data.forEach(function(element) {
          $('.list-group').append('<li class="list-group-item"><a href="/post/'+element.title.replace(/\s/g,"-")+'">'+element.title+'</li>')
        });
    });
</script>
<script src="/js/chat.js"></script>