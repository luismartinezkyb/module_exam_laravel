$(document).ready(function(){
	$('#btnLoadPosts').click(function(){
        // window.location.href="/blog"; 
		$.get("http://localhost:3000/api/posts").done(function (data){                                                                                                                                                                                                                                                                                                                                                                                                   
			console.table(data);
			$.each(data, function(key,post){
                var id_post=post.id;
				$('#divPadre').append(`<div class="col-lg-4 col-md-4"><div class="fh5co-blog animate-box fadeInUp animated-fast">
                                <a href="/blog/${id_post}"><img class="img-responsive" src="${post.image}"alt=""></a>
                                <div class="blog-text"><h3><a >${post.title}</a></h3>
                                <span class="posted_on">${post.created_at}</span><span class="comment">
                                <a href="/blog/${id_post}">${id_post}<i class="icon-speech-bubble"></i></a></span>
                                <p>${post.content }</p><a  href="/blog/${id_post}" class="btn btn-primary">Detalles</a></div></div></div>`);
			})
		})
	});

    $('#btnLoadDetails').click(function(){
        const element = document.getElementById("btnLoadDetails"); 
        var text = element.getAttribute("current"); 
        var api="http://localhost:3000/api/posts/"+text;
        var nomCat;
        
        $.get(api).done(function (data){  
            console.log(data);                                                                                                                                                                                                                                                                                                                                                                                                 
            
            $.each(data, function(key, post){
                $.each(post.Category, function(key, category){
                     nomCat = category.name;
                });
                $('#divContent1').append(`<div class="col-md-6 col-md-push-6">
                                                    <div class="desc">
                                                        <h3>Post: ${post.id}</h3>
                                                        <h3>Titulo: <i>${post.title}</i></h3>
                                                        <h3>${nomCat} &amp; </h3>
                                                        <p><span class="bg badge bg-info">${post.author}</span></p>
                                                        <span class="badge badge-primary posted_on">${post.created_at}</span>
                                                        <p>${post.content}</p>
                                                        

                                                    </div>
                                                                        
                                                </div>
                                                <div class="col-md-6 col-md-pull-6">
                                                    <img class="img-responsive" src="${post.image}" alt="about">
                                                </div>`);//fin div
                            
                $.each(post.comments, function(key,post2){
                    console.log(post2)
                    $('#divContent2').append(`<h3>Id commentario: ${post2.id_comment}</h3>
                                        <p><span class="badge badge-primary">${post2.commenter}</span></p> 
                                        <p>${post2.comment}</p>
                                        <span class="badge badge-primary posted_on">${post2.created_at}</span>
                                        `);
                });//fin each
            })


              
        })//fin get
    });//fin btn 
});//fin script

    
