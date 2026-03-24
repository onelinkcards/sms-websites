/**
 * Homepage sections: scroll reveal (+ legacy accordion hook if present)
 */
(function () {
  'use strict';

  function initReveal() {
    var nodes = document.querySelectorAll('[data-sms-hs-reveal]');
    if (!nodes.length) return;
    if (!('IntersectionObserver' in window)) {
      nodes.forEach(function (el) {
        el.classList.add('is-inview');
      });
      return;
    }
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('is-inview');
          io.unobserve(entry.target);
        });
      },
      { root: null, rootMargin: '0px 0px -8% 0px', threshold: 0.08 }
    );
    nodes.forEach(function (el) {
      io.observe(el);
    });
  }

  /* Gallery: CSS marquee (sms-home-sections.css) — no JS */

  /** Facilities list: click row to set active (crimson + image); arrow links still navigate */
  function initFacItems() {
    var root = document.querySelector('[data-sms-fac-items]');
    if (!root) return;

    var items = root.querySelectorAll('[data-sms-fac-item]');
    items.forEach(function (item) {
      item.addEventListener('click', function () {
        items.forEach(function (el) {
          el.classList.remove('sms-hs-fac__item--active');
          el.removeAttribute('aria-current');
        });
        item.classList.add('sms-hs-fac__item--active');
        item.setAttribute('aria-current', 'true');
      });
    });

    root.querySelectorAll('[data-sms-fac-arrow]').forEach(function (a) {
      a.addEventListener('click', function (e) {
        e.stopPropagation();
      });
    });
  }

  function initHomeFaq() {
    var root = document.querySelector('[data-sms-home-faq]');
    if (!root) return;

    var items = root.querySelectorAll('.sms-faq-item');
    items.forEach(function (item) {
      var btn = item.querySelector('.sms-faq-item__btn');
      if (!btn) return;

      btn.addEventListener('click', function () {
        var open = item.classList.contains('is-open');
        if (!open) {
          items.forEach(function (other) {
            other.classList.remove('is-open');
            var ob = other.querySelector('.sms-faq-item__btn');
            if (ob) ob.setAttribute('aria-expanded', 'false');
          });
          item.classList.add('is-open');
          btn.setAttribute('aria-expanded', 'true');
        } else {
          item.classList.remove('is-open');
          btn.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }

  function initAccordion() {
    var root = document.querySelector('[data-sms-hs-accordion]');
    if (!root) return;

    var items = root.querySelectorAll('.sms-hs-acc__item');
    items.forEach(function (item) {
      var btn = item.querySelector('.sms-hs-acc__btn');
      if (!btn) return;

      btn.addEventListener('click', function () {
        var open = item.classList.contains('is-open');
        if (!open) {
          items.forEach(function (other) {
            other.classList.remove('is-open');
            var ob = other.querySelector('.sms-hs-acc__btn');
            if (ob) ob.setAttribute('aria-expanded', 'false');
          });
          item.classList.add('is-open');
          btn.setAttribute('aria-expanded', 'true');
        } else {
          item.classList.remove('is-open');
          btn.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initReveal();
      initFacItems();
      initHomeFaq();
      initAccordion();
    });
  } else {
    initReveal();
    initFacItems();
    initHomeFaq();
    initAccordion();
  }
})();
