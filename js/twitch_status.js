$(document).ready(function() {
  //get  channel live status
  $.ajax({
    type: 'GET',
    url: 'https://api.twitch.tv/kraken/streams/robtheswan',
    headers: {
      'Client-ID': '86nc933gom9129ledgvh7umtjqh3l1z'
    },
    success: function(data) {
      if (data.stream != null) {
        //display text when live
        $('.live-status').show();
        $('#live-status-text').html("I'm currently Live! Join us");
        if (data.stream.viewers > 10) {
          $('#live-status-count').html("There are " + data.stream.viewers + " people watching")
        } else {
          $('#live-status-count').hide();
        }
      } else {
        //hide when offline
        $('.live-status').hide();
      }
    }
  })
});
