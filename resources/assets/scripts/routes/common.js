function importAll (r) {
  r.keys().forEach(r);
}


export default {
  init() {
    // This will import all vue modules 
    importAll(require.context('../../../views/modules/', true, /\.vue\.js$/));
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};