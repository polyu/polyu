(function(jwplayer){

var template = function(player, config, div){
    var sayhello = function() {
      alert('Hello World!');
    }
    function setup(evt) {
     //player.getPlugin("dock").setButton('helloworld', sayhello, 'player/cbplayer/skins/live.png', 'player/cbplayer/skins/live.png');
    }
    player.onReady(setup);
    this.resize = function(width, height) {
    }
}

jwplayer().registerPlugin('plugin', template);

})(jwplayer);