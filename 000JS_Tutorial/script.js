'use strict';

const poll = {
    question:'What is your favorite programing Language?',
    options:['0:Javascript','1:PYTHON','2:Rust','3:C++'],
    answers:new Array(4).fill(0),
    registerNewAnswer(){
        const answer = Number(
            prompt(
                `${this.question}\n${this.options.join('\n')}\n(Write option number)`
            )
        );

        console.log(answer);
    }
  


}

poll.registerNewAnswer();