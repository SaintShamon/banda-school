import $ from 'jquery';

import {
    lazy
} from './lazy';

import {
    lottie
} from './lottie';

import {
    header
} from './template-parts/header/header';

import {
    footer
} from './template-parts/footer/footer';

import {
    scrollToAnchor
} from './animations/scroll-to-anchor';

import {
    calltoaction
} from './template-parts/blocks/call_to_action';

import {
    projectsfunc
} from './template-parts/blocks/projects';

header();
footer();
calltoaction();
projectsfunc();
lazy();
lottie();
scrollToAnchor();