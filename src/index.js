import './style.css';
{
  const $filterForm = document.querySelector(`.programma__filter`),
    $programmas = document.querySelector(`.events__list`),
    $search = document.querySelector(`.advanced__search`);

  const init = () => {
    if ($filterForm) {
      $filterForm.addEventListener(`change`, handleSubmitFilterForm);
      $search.addEventListener(`keyup`, handleSubmitFilterForm);
      const $submitbtn = document.querySelector(`.programma__filter__submit`);
      $submitbtn.classList.add(`hidden`);
    }

    if (window.addEventListener) {
      window.addEventListener('load', createIframe, false);
    } else if (window.attachEvent) {
      window.attachEvent('onload', createIframe);
    } else {
      window.onload = createIframe;
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

  const handleLoadProgrammas = data => {
    console.log(data);
    if (data == '') {
      $programmas.innerHTML = `<p class='programma__feedback'>Geen voorstellingen gevonden</p>`;
    } else {
      $programmas.innerHTML = data
        .map(programma => createProgrammaListItem(programma))
        .join(``);
    }
  };

  const createProgrammaListItem = programma => {
    let returnstring = ``;
    returnstring += `<li class='events__list__event'><span class="card event__card"><span class="light">&mdash;</span>&nbsp;${
      programma['Type']
    }</span>
      <a class="event__link" href="index.php?page=detail&amp;id=${
  programma['id']
}">
          <picture class="events__list__image">
              <source srcset="./assets/img/programma/${
  programma['afbeelding2']
}" type="image/webp">
              <source srcset="./assets/img/programma/${
  programma['afbeelding']
}">
              <img class="" src="./assets/img/programma/${
  programma['afbeelding']
}"alt="${programma['alt']}">
          </picture>
          <div class="event__info">
              <span class='event__perf'>${programma['Performer']}</span>
              <br>
              `;
    if (programma['Act'] == '') {
      returnstring += `
              <span class='event__act'>${programma['Performer']}</span>
              `;
    } else {
      returnstring += `
              <span class='event__act'>${programma['Act']}</span>
              `;
    }
    returnstring += `
              <br>
              `;
    if (programma['Start uur'] == '') {
      returnstring += `
      <span class='event__uur'>Loop van de dag</span>

              `;
    } else {
      returnstring += `
      <span class='event__uur'>${programma['Start uur']}</span>
              `;
    }
    returnstring += `
          </div>
      </a>
    </li>`;
    return returnstring;
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
      .then(data => handleLoadProgrammas(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  init();
}
