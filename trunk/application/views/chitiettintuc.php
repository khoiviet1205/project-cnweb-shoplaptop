 foreach($posts as $post){
                        echo "
                            <div class='primary' style='width:100%; margin-top: 0px;'>
                            <div class='post'>
                            <h2><a href='single.php?pid={$post['page_id']}'>{$post['page_title']}</a></h2>
                            <p class='meta' style='float:none;'><strong>Posted by: <a href='author.php?aid={$post['aid']}'></strong>{$post['author']}<strong></a> | Posted on: </strong> {$post['post-on']}</p>
                            <p>".html_entity_decode($post['content'],ENT_COMPAT)."
                            </div>
                            </div>
                            ";
                        }