function value(row, index) {
    if (index < 0 || index > row) {
        return 0;
    }
    if (index === 1 || index === row) {
        return 1;
    }
    return value(row - 1, index - 1) + value(row - 1, index);
}

function row(n) {
	var r = [];
    for (var i = 1; i <= n; i++) {
        r.push(value(n, i));
    }
    return r;
}

function pascalsTriangle(n) {
    for (var i=1; i <= n; i++) {
        console.log(row(i));
    }
}

pascalsTriangle(5);