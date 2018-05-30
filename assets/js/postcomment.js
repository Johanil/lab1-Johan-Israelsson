var regsubmit = document.getElementById('submit_comment');
regsubmit.addEventListener("click", commentvalidateForm);
function commentvalidateForm ()
{
  var comment = document.comment_box.comment.value;



  if(comment.trim() == "" || comment.length < 10)
    {
      alert('Du måste skriva något mer än 10 tecken för att kunna posta din kommentar');
    }
}
