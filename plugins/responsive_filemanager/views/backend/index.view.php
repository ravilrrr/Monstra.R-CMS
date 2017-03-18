
<script>
$(document).delegate('.page-image span', 'click', function(e) {
    
    //e.preventDefault();
    //var element = this;
    //url: $(element).attr('href'),

    html  = '<div id="modal-page_image" class="modal">';
    html += '  <div class="modal-dialog"  style="width:100%; max-width:1600px; margin: 10px 0 10px 7px;">';
    html += '    <div class="modal-content">';
    html += '      <div class="modal-header">';
    html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
    html += '        <h4 class="modal-title">Filemanager</h4>';
    html += '      </div>';
    html += '      <div class="modal-body"><iframe width="100%" height="500" src="<?php echo Option::get('siteurl')?>/plugins/responsive_filemanager/filemanager/dialog.php?type=2&&lang=<?php echo $lng?>&field_id=page_image&akey=<?php echo $sec?>" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe></div>';
    html += '    </div';
    html += '  </div>';
    html += '</div>';

    $('body').append(html);

    $('#modal-page_image').modal('show');

});

function responsive_filemanager_callback(field_id){
    var str = $('#page_image').val();
    var url = str.replace('<?php echo Option::get('siteurl')?>', '');
    $('#page_image').val(url);
}

</script>
