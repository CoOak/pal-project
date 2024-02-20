let pesticide = [
  {
    id: 1,

    name: "ကာဗာ ၂၅ အက်စ်စီ",
    img: "https://wisarra.com/storage/images/products/initial/bUBJWDcdC0i70KGu8viu-20210621045132.jpg",
    type: "Poe That Sey",
    review:
      "My Fault (also known as Culpa Mia in Spanish) is a bit of a mess but it’s a watchable mess all the same. This very often falls in the realm of absolute car crash but just like seeing a pile-up on the side of a highway, you feel bad for looking but can’t tear your eyes away from the horror.This teen romance centers on Noah, a plucky 17 year old who has to leave her town behind and move in with her mother’s boyfriend, Will. He has his own company, a big villa and a hunky son called Nick, whom Noah “hates” until she doesn’t, as it’s immediately clear that there’s some serious sexual tension between the pair.What ensues from here are a bunch of clichés strung together with toe-curlingly cringy dialogue. There are brief flickers of obstacles for the pair to overcome, including past trauma for Noah, an ex-boyfriend who comes back into the picture and a half-arsed attempt at a love triangle involving nice-guy Mario.As the film reaches its third act, the picture whiplashes away from cheesy romance and tropes into all-out allMovie thriller territory. While the earlier parts of the film portray a couple of street races, the incredulous way this charges into its final act is hilariously mismanaged. I’m not going to spoil the big climax here but good luck not laughing at the way the “villain” is dispatched by the end.That’s right, on top of everything else Culpa Mia tries to juggle, there’s a mastermind sending threatening messages to Noah too. As a result, all these competing ideas push aside anything as deep as character development or a competent story.Noah and Nick may have unresolved past trauma, but they still play into archetypal tropes that we’ve seen a number of times across different films in the past. To make matters worse, everyone else in this film are so forgettable and bland that you’ll wonder why you’re even watching.But watch it you probably will! This absolutely falls on the side of being a guilty pleasure, as you’ll find yourself morbidly curious to find out what happens next in the story. If you do decide to take the plunge, be prepared to cringe and laugh your way through this one.",
  },

  {
    id: 2,

    name: "ကာဗာ 30 အက်စ်စီ",
    img: "https://wisarra.com/storage/images/products/initial/bUBJWDcdC0i70KGu8viu-20210621045132.jpg",
    type: "Poe That Sey",
    review:
      "My Fault (also known as Culpa Mia in Spanish) is a bit of a mess but it’s a watchable mess all the same. This very often falls in the realm of absolute car crash but just like seeing a pile-up on the side of a highway, you feel bad for looking but can’t tear your eyes away from the horror.This teen romance centers on Noah, a plucky 17 year old who has to leave her town behind and move in with her mother’s boyfriend, Will. He has his own company, a big villa and a hunky son called Nick, whom Noah “hates” until she doesn’t, as it’s immediately clear that there’s some serious sexual tension between the pair.What ensues from here are a bunch of clichés strung together with toe-curlingly cringy dialogue. There are brief flickers of obstacles for the pair to overcome, including past trauma for Noah, an ex-boyfriend who comes back into the picture and a half-arsed attempt at a love triangle involving nice-guy Mario.As the film reaches its third act, the picture whiplashes away from cheesy romance and tropes into all-out allMovie thriller territory. While the earlier parts of the film portray a couple of street races, the incredulous way this charges into its final act is hilariously mismanaged. I’m not going to spoil the big climax here but good luck not laughing at the way the “villain” is dispatched by the end.That’s right, on top of everything else Culpa Mia tries to juggle, there’s a mastermind sending threatening messages to Noah too. As a result, all these competing ideas push aside anything as deep as character development or a competent story.Noah and Nick may have unresolved past trauma, but they still play into archetypal tropes that we’ve seen a number of times across different films in the past. To make matters worse, everyone else in this film are so forgettable and bland that you’ll wonder why you’re even watching.But watch it you probably will! This absolutely falls on the side of being a guilty pleasure, as you’ll find yourself morbidly curious to find out what happens next in the story. If you do decide to take the plunge, be prepared to cringe and laugh your way through this one.",
  },
];

document.addEventListener("DOMContentLoaded", function () {
  let list = document.getElementById("pesticideList");

  pesticide.forEach(function (p) {
    let div = document.createElement("div");

    div.innerHTML = `
      <a href="test.html?id=${p.id}" class="text-decoration-none">
        <div class="pe-5">
          <img src="${p.img}" class="pesImg" alt="">
          <p class="pesTitle text-black">${p.name}</p>
        </div>
      </a>
    `;

    list.append(div);
  });
});
