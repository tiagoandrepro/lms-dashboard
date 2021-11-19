const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"dashboard.index":{"uri":"dashboard","methods":["GET","HEAD"]},"dashboard.show":{"uri":"dashboard\/show","methods":["GET","HEAD"]},"contacts.index":{"uri":"contacts","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
