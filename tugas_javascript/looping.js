function segitiga(n) {
    let hasil = '';
    for (let i = 0; i < n; i++) {
        for (let j = 0; j <= i; j++) {
            hasil += '* ';
        }
        hasil += '\n';
    }
    return hasil;
}

function segitiga2(n) {
    let hasil = '';
    for (let i = 0; i < n; i++) {
        for (let j = n; j > i; j--) {
            hasil += '* ';
        }
        hasil += '\n';
    }
    return hasil;
}

function segitiga3(n) {
    let hasil = '';
    for (let i = n; i > 0; i--) {
        for (let j = 0; j <= n; j++) {
            j >= i ? hasil += '* ' : hasil += ' ';
        }
        hasil += '\n';
    }
    return hasil;
}

function segitiga4(n) {
    let hasil = '';
    for (let i = n; i > 0; i--) {
        for (let j = 0; j <= n; j++) {
            j >= i ? hasil += '*' : hasil += ' ';
        }
        hasil += '\n';
    }
    return hasil;
}

console.log(segitiga(5));
console.log(segitiga2(5));
console.log(segitiga3(5));
console.log(segitiga4(5));