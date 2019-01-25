import './style.css';
{
  const init = () => {
    // Check for browser support of event handling capability
    if (window.addEventListener)
      window.addEventListener('load', createIframe, false);
    else if (window.attachEvent) window.attachEvent('onload', createIframe);
    else window.onload = createIframe;
  };

  const createIframe = () => {
    const i = document.createElement('iframe');
    i.src =
      'https://www.google.com/maps/d/u/0/embed?mid=1WLLsnFpRYYwdMSQakhOVz6lkVjX0E1T6';
    i.scrolling = 'auto';
    i.frameborder = '0';
    i.width = '100%';
    i.height = '480px';
    i.setAttribute('allowFullScreen', '');
    i.setAttribute('style', 'border:0');
    document.getElementById('div-that-holds-the-iframe').appendChild(i);
  };

  init();
}
