"use strict";

const btnContact = document.getElementById("btncontact");

if (btnContact) {
	console.log("Yay!!");
	btnContact.addEventListener("click", () => {
		let inputArr = document.getElementsByTagName("input");
		let message = document.getElementById("formMsg");

		// Checking the emptyness of the required fields
		let isFilled = true;
		for (let i = 0; i < 4; i++) {
			const element = inputArr[i];
			isFilled = Boolean(element.textLength);
			if (!isFilled) {
				break;
			}
		}

		// Getting the infos on the various scenarios
		if (!isFilled) {
			console.log("Please, fill up all the required fields.");
		} else if (message.textLength <= 0) {
			console.log("Please, fill up the message field.");
		} else {
			// Write the code to send the mail to infos@novatic-group.com
			console.log(
				"Write the code to send the mail to infos@novatic-group.com"
			);

			// Clearing the fields
			for (let i = 0; i < 4; i++) {
				const element = inputArr[i];
				element.value = "";
			}
			message.value = "";
		}
	});
} else {
	console.log("Nay");
}
