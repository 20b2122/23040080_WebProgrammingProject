var form = document.querySelector('.needs-validation');

form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    form.classList.add('was-validated');
})

function cap() {
    var characters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
                      '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 
                      'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '!', '@', '#', '$', '%', '^', '&', '*', '+'
    ];

    var lengthChar = characters.length;

    var char1 = characters[Math.floor(Math.random() * lengthChar)];
    var char2 = characters[Math.floor(Math.random() * lengthChar)];
    var char3 = characters[Math.floor(Math.random() * lengthChar)];
    var char4 = characters[Math.floor(Math.random() * lengthChar)];
    var char5 = characters[Math.floor(Math.random() * lengthChar)];
    var char6 = characters[Math.floor(Math.random() * lengthChar)];

    var captcha = char1 + char2 + char3 + char4 + char5 + char6;
    document.getElementById('captcha').value = captcha;
}

