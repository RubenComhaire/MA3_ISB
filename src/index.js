import './style.css';
{
  const $filterForm = document.querySelector(`.programma__filter`),
    $events = document.querySelector(`.events__list`);

  const init = () => {
    if (window.addEventListener) {
      window.addEventListener('load', createIframe, false);
    } else if (window.attachEvent) {
      window.attachEvent('onload', createIframe);
    } else window.onload = createIframe;

    if ($filterForm) {
      $filterForm.addEventListener(`submit`, handleSubmitFilterForm);
    }
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

  const handleLoadEvents = data => {
    $events.innerHTML = data
      .map(events => createEventListItem(events))
      .join(``);
  };
  const createEventListItem = event => {
    return ` <li class='events__list__event'>
    <span class="card event__card"><span class="light">&mdash;</span>&nbsp;${
  event['Type']
}</span>
                <a class="event__link" href="index.php?page=detail&amp;id=${
  event['id']
}">
                    <picture class="events__list__image">
                        <source srcset="./assets/img/programma/${
  event['afbeelding2']
}" type="image/webp">
                        <source srcset="./assets/img/programma/${
  event['afbeelding']
}">
                        <img class="" src="./assets/img/programma/${
  event['afbeelding']
}"
                            alt="${event['alt']}">
                    </picture>
                    <div class="event__info">
                        <span class='event__perf'>${event['Performer']}</span>
                        <br>
                        <span class='event__act'>${event['Act']}</span>
                        <br>
                        <span class='event__uur'>${event['Start uur']}</span>
                    </div>
                </a>
            </li>`;
  };
  const handleSubmitFilterForm = e => {
    console.log('submit');
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadEvents(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  init();
}
