var PORT = 30004;
var HOST = '192.168.1.101';

var dgram = require('dgram');

var buf = new Buffer(1);
buf.writeInt8(-101,0);

var client = dgram.createSocket('udp4');
client.send(buf, 0, buf.length, PORT, HOST, function(err, bytes) {
    if (err) throw err;
    console.log('UDP message sent to ' + HOST +':'+ PORT);
    client.close();
});
