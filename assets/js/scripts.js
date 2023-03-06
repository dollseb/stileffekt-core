const body = document.body;



document.querySelectorAll('.block-media').forEach(function (element) {

    const slider = element.querySelector('.glide')

    if (slider) {
        const glide = new Glide(slider, {
            type: 'carousel',
            perView: 1,
        })

        glide.mount();
    }

})


// const navToggle = document.querySelector('header .toggle button')
//
// navToggle.addEventListener('click', (event) => {
//     if (body.classList.contains('nav-active')) {
//         body.classList.remove('nav-active')
//     } else {
//         body.classList.add('nav-active')
//     }
// });
//
//
//
// const blockPost = document.querySelectorAll('.block-posts');
//
// blockPost.forEach(function (element) {
//
//     const post = element.querySelectorAll('.post');
//
//     post.forEach(function (element) {
//
//         const elPost = element;
//         const elContent = element.querySelector('.post-text')
//         const elToggle = element.querySelector('.g-toggle')
//
//         elToggle.addEventListener('click', function (event) {
//
//             if (elPost.classList.contains('active')) {
//                 elPost.classList.remove('active')
//                 elToggle.classList.remove('active')
//                 elContent.dataset.visible = "false"
//             } else {
//                 elPost.classList.add('active')
//                 elToggle.classList.add('active')
//                 elContent.dataset.visible = "true"
//             }
//
//         })
//
//     });
//
// });
//
//
// const blockCompanies = document.querySelectorAll('.block-companies');
//
// blockCompanies.forEach(function (element) {
//
//     const company = element.querySelectorAll('.company');
//
//     company.forEach(function (element) {
//
//         const elCompany = element;
//         const elContent = element.querySelector('.contact-text')
//         const elToggle = element.querySelector('.g-toggle')
//
//         if (elToggle) {
//
//             elToggle.addEventListener('click', function (event) {
//
//                 if (elCompany.classList.contains('active')) {
//                     elCompany.classList.remove('active')
//                     elToggle.classList.remove('active')
//                     elContent.dataset.visible = "false"
//                 } else {
//                     elCompany.classList.add('active')
//                     elToggle.classList.add('active')
//                     elContent.dataset.visible = "true"
//                 }
//
//             })
//         }
//     });
//
// });
//
// window.onload = function () {
//     const hash = location.hash
//
//     if (hash) {
//         window.scrollTo(0, 0)
//
//         const target = document.querySelector(hash)
//
//         if (target) {
//             const scrollTo = target.getBoundingClientRect().top + window.scrollY - 120;
//             window.scrollTo({top: scrollTo, behavior: 'smooth'});
//         }
//     }
// };
//
// let anchorLinks = document.querySelectorAll('.navigation-header a, .component--button, .block-hero .g-button a, .g-link a')
//
// for (let item of anchorLinks) {
//     item.addEventListener('click', (event) => {
//         const pos = item.href.indexOf('#')
//         const hashValue = item.href.substr(pos)
//
//
//         if (hashValue === '/') return;
//         const target = document.querySelector(hashValue)
//
//         const scrollTo = target.getBoundingClientRect().top + window.scrollY - 136
//
//         window.scrollTo({top: scrollTo, behavior: 'smooth'})
//
//         history.pushState(null, null, hashValue)
//         event.preventDefault()
//     })
// }
//
//
// if (window.location.hash != '' && window.location.hash != '#') {
//     let hash = window.location.hash;
//     let target = document.querySelector(hash)
//     const scrollTo = target.getBoundingClientRect().top + window.scrollY - 120;
//     window.scrollTo({top: scrollTo, behavior: 'smooth'});
// }
//
//
// function filterJobs() {
//     const filterApplicants = document.querySelector('.filter-applicants')
//     const filterCompanies = document.querySelector('.filter-companies')
//
//     activeElementApplicants = filterApplicants.querySelector('.filter-elements .active').dataset.filter
//     activeElementCompanies = filterCompanies.querySelector('.filter-elements .active').dataset.filter
//
//     const blockJobs = document.querySelectorAll('.block-jobs');
//     blockJobs.forEach(function (element) {
//
//         const jobs = element.querySelectorAll('.job')
//
//         jobs.forEach(function (element) {
//             const elJob = element;
//
//             if (elJob.classList.contains(activeElementApplicants) && elJob.classList.contains(activeElementCompanies)) {
//                 elJob.classList.remove('hide')
//                 elJob.classList.add('show')
//             } else {
//                 elJob.classList.add('hide')
//                 elJob.classList.remove('show')
//             }
//         })
//
//     })
// }
//
// const blockVideo = document.querySelectorAll('.block-video, .block-intro');
// if (blockVideo) {
//     blockVideo.forEach(function (element) {
//         const videoOverlay = element.querySelector('.overlay')
//         const overlayDecoration = element.querySelector('.overlay-decoration')
//         const videoSelfhosted = element.querySelector('video')
//         const videoOembed = element.querySelector('iframe')
//
//         if ('ontouchstart' in window) {
//             overlayDecoration.classList.add('visible');
//         } else {
//
//             if (videoOverlay) {
//                 videoOverlay.addEventListener('mouseenter', function () {
//                     overlayDecoration.classList.add('visible');
//                 })
//
//                 videoOverlay.addEventListener('mouseleave', function () {
//                     overlayDecoration.classList.remove('visible');
//                 })
//
//                 videoOverlay.addEventListener('mousemove', function (event) {
//                     let left = event.offsetX;
//                     let top = event.offsetY;
//
//                     overlayDecoration.style.left = left + 'px';
//                     overlayDecoration.style.top = top + 'px';
//                 })
//             }
//         }
//
//         if (videoOverlay) {
//             videoOverlay.addEventListener('click', function () {
//                 this.classList.add('hide');
//                 overlayDecoration.classList.remove('visible')
//
//                 if (videoSelfhosted) {
//                     videoSelfhosted.play();
//                 }
//
//                 if (videoOembed) {
//                     videoOembed.src += "&autoplay=1"
//                 }
//
//             })
//         }
//     })
// }
//
// const blockJobs = document.querySelectorAll('.block-jobs');
//
// blockJobs.forEach(function (element) {
//
//     const jobs = element.querySelectorAll('.job')
//
//     jobs.forEach(function (element) {
//
//         const elJob = element;
//         const elContent = element.querySelector('.job-body')
//         const elToggle = element.querySelector('.job-toggle')
//         const elToggle2 = element.querySelector('.job-header')
//
//         if (elToggle) {
//
//             elToggle.addEventListener('click', function (event) {
//
//                 if (elJob.classList.contains('active')) {
//                     elJob.classList.remove('active')
//                     elToggle.classList.remove('active')
//                     elContent.dataset.visible = "false"
//                 } else {
//                     elJob.classList.add('active')
//                     elToggle.classList.add('active')
//                     elContent.dataset.visible = "true"
//                 }
//             })
//         }
//         if (elToggle2) {
//             elToggle2.addEventListener('click', function (event) {
//
//                 if (elJob.classList.contains('active')) {
//                     elJob.classList.remove('active')
//                     elToggle.classList.remove('active')
//                     elContent.dataset.visible = "false"
//                 } else {
//                     elJob.classList.add('active')
//                     elToggle.classList.add('active')
//                     elContent.dataset.visible = "true"
//                 }
//
//             })
//         }
//     });
//
//
//     const filters = element.querySelectorAll('.filter');
//
//     filters.forEach(function (element) {
//         const filter = element;
//         const filterActive = filter.querySelector('.filter-active span')
//         const filterElements = filter.querySelectorAll('ul li')
//
//         filter.addEventListener('click', function () {
//
//             if (filter.classList.contains('active')) {
//                 filter.classList.remove('active');
//             } else {
//                 filters.forEach(function (element) {
//                     element.classList.remove('active');
//                 })
//                 filter.classList.add('active')
//             }
//
//         })
//
//         filterElements.forEach(function (element) {
//             element.addEventListener('click', function (event) {
//                 filterActive.textContent = this.textContent
//                 filterElements.forEach(function (element) {
//                     element.classList.remove('active')
//                 })
//                 this.classList.add('active');
//
//                 filterJobs()
//             })
//         })
//
//     })
//
//
// });
//
//
// (function () {
//
//     const tabsWrapper = document.querySelectorAll('.block-tabs')
//
//     tabsWrapper.forEach(function (wrapperElement) {
//
//         const tabTitle = wrapperElement.querySelectorAll('.tab-title');
//         const tabContent = wrapperElement.querySelectorAll('.tab-content .tab');
//
//         tabTitle.forEach(function (tabElement) {
//
//             tabElement.addEventListener('click', function (event) {
//
//                 const tabID = this.dataset.tabId
//
//                 tabTitle.forEach(function (element) {
//                     element.dataset.active = "false";
//                 })
//
//                 tabContent.forEach(function (element) {
//
//                     if (element.dataset.tabId === tabID) {
//                         element.dataset.active = "true";
//                     } else {
//                         element.dataset.active = "false";
//                     }
//                 })
//
//                 this.dataset.active = "true";
//
//             })
//         })
//     });
//
// })();
//
// (function () {
//
//     const d = document.documentElement;
//     const w = window;
//
//     let prevScroll = w.scrollY || d.scrollTop;
//     let curScroll;
//
//     const header = document.querySelector('#header');
//
//     const checkScroll = function () {
//
//         curScroll = w.scrollY || d.scrollTop;
//
//         if (curScroll <= 0) {
//             header.classList.remove('scroll-down');
//             header.classList.remove('scroll-up');
//         } else if (curScroll > prevScroll) {
//             header.classList.add('scroll-down');
//             header.classList.remove('scroll-up');
//         } else if (curScroll < prevScroll) {
//             header.classList.remove('scroll-down');
//             header.classList.add('scroll-up');
//         }
//
//         prevScroll = curScroll;
//     };
//
//     window.addEventListener('scroll', checkScroll);
//
// })();
//
//
// // jquery content
// (function ($) {
//
//     $.fn.empty = function () {
//         return 0;
//     };
//
//     $.fn.underline = function () {
//
//         let $target = $(".navigation-inner .indicator")
//         let padding = parseInt($(this).css("padding-left"))
//
//         let width, left;
//
//         width = $(this).width()
//         left = $(this).offset().left - $(".navigation-header").offset().left + padding
//
//         $target.css('width', width + 'px')
//         $target.css('left', left + 'px')
//     };
//
//     $(window).on('load', function () {
//         const $items = $(".navigation-header > ul > li");
//         const $active = $(".navigation-header > ul > li.current-menu-item");
//
//         if ($active.length > 0) {
//             $active.underline();
//         } else {
//             let $target = $(".navigation-inner .indicator")
//             let width = 0, left = 0
//             $target.css('width', width + 'px')
//             $target.css('left', left + 'px')
//         }
//
//         $items.hover(function () {
//             $(this).underline();
//         }, function () {
//             if ($active.length > 0) {
//                 $active.underline();
//             } else {
//                 let $target = $(".navigation-inner .indicator")
//                 let width = 0, left = 0
//                 $target.css('transform', 'none')
//                 $target.css('width', width + 'px')
//                 $target.css('left', left + 'px')
//             }
//         });
//     });
//
//     $(window).resize(function () {
//         var $items = $(".header__navigation.nav-desktop > ul > li");
//
//         $items.each(function () {
//             if ($(this).hasClass('current-menu-item')) {
//                 $(this).underline();
//             }
//         });
//
//     });
//
// })(jQuery);