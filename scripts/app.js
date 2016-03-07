"use strict";

class Dog {
	constructor(nick) {
        this.nick = nick;
    }

    say() {
        return `${this.nick} say GAV GAV`;
    }
}

$(() => {
    let dog = new Dog('Rex');
    $('h1').text(dog.say())
});

