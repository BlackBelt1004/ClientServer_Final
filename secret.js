const music = new Audio ('Siamang.wav');
var pattern = ['ArrowUp','ArrowUp','ArrowDown','ArrowDown',
'ArrowLeft','ArrowRight','ArrowLeft','ArrowRight', 'b','a'];
var current = 0;

//konami event handler
var keyHandler = function(event){
    if(pattern.indexOf(event.key)<0 || event.key!== 
    pattern[current]){
        current = 0;
        return;
    }

    current++;

    //if complete alert, play a sound and reset
    if(pattern.length === current){
        current = 0;
        music.play();
    }
}

document.addEventListener('keydown', keyHandler,false);