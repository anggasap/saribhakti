<!DOCTYPE html>
<html manifest="/_/chrome/newtab/manifest?espv=2&amp;ie=UTF-8" lang="en-ID">
<head>
    <style>.cta {
        }

        .default-theme {
        }

        #dood {
        }

        .fkbx {
        }

        #fkbx-hht {
        }

        .fkbx-hht-s {
        }

        #fkbx-text {
        }

        .hide-sf {
        }

        .init {
        }

        .light-text {
        }

        .mv-dot {
        }

        .mv-dot-bg {
        }

        .mv-focused {
        }

        .mv-link-hide {
        }

        .mv-locthumb {
        }

        .mv-locgradient {
        }

        .mv-loctitle {
        }

        .mv-locfallback {
        }

        .mv-tiles {
        }

        .mv-x {
        }

        .mv-x-inner {
        }

        .prm-pt {
        }

        .prm {
        }

        .prt {
        }

        .pt {
        }

        @-webkit-keyframes init-hide {
            0% {
                opacity: 0
            }
            99% {
                opacity: 0
            }
            100% {
                opacity: 1
            }
        }

        body {
            font: small arial, sans-serif;
            margin: 0;
            min-height: 616px;
            text-align: -webkit-center
        }

        body.hide, body.hide-sf #fkbx, body.hide-sf #lga {
            visibility: hidden
        }

        body.init {
            -webkit-animation: init-hide 0.5s linear
        }

        #lga.init, #fkbx.init {
            -webkit-animation: init-hide 2s linear
        }

        a {
            color: #12c;
            text-decoration: none
        }

        a:hover, a:active {
            text-decoration: underline
        }

        a:visited {
            color: #609
        }

        #most-visited {
            -webkit-user-select: none;
            z-index: 1
        }

        #mv-tiles {
            margin: 0;
            overflow: hidden;
            position: relative;
            text-align: start
        }

        .mv-tile {
            -webkit-transition-duration: 200ms;
            -webkit-transition-property: -webkit-transform, margin, opacity, width;
            display: inline-block;
            line-height: normal;
            position: relative;
            vertical-align: top
        }

        .mv-tile.mv-bl {
            margin-left: 0;
            margin-right: 0;
            opacity: 0;
            width: 0
        }

        .mv-page {
            cursor: pointer;
            outline: none
        }

        ._kte {
            height: 100%;
            visibility: hidden;
            width: 100%
        }

        .mv-page ._kte {
            visibility: visible
        }

        .mv-mask, .mv-thumb, .mv-locthumb, .mv-locgradient, .mv-locfallback {
            position: absolute
        }

        .mv-mask {
            border: 1px solid transparent;
            left: 0;
            pointer-events: none;
            position: absolute;
            top: 0
        }

        .mv-title {
            border: none;
            position: absolute
        }

        .mv-locthumb, .mv-locgradient, .mv-locfallback {
            border-radius: 3px;
            pointer-events: none
        }

        .mv-locgradient {
            background: -webkit-linear-gradient(left, rgba(35, 35, 35, 1) 0%, rgba(35, 35, 35, 1) 40%, rgba(35, 35, 35, 0.3) 60%, rgba(35, 35, 35, 0.1) 70%, rgba(35, 35, 35, 0) 100%)
        }

        .mv-locthumb img {
            border-radius: 0 3px 3px 0;
            height: 83px;
            left: 55px;
            pointer-events: none;
            position: absolute;
            top: 0;
            width: 83px
        }

        .mv-locfallback {
            overflow: hidden
        }

        .mv-locfallback ._Gsd {
            box-sizing: content-box;
            overflow: hidden;
            position: absolute;
            text-align: center;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .mv-locfallback img {
            height: auto;
            left: 0;
            pointer-events: none;
            position: absolute;
            top: 0
        }

        .mv-loctitle {
            -webkit-box-orient: vertical;
            -webkit-box-pack: center;
            -webkit-line-clamp: 5;
            border: none;
            border-radius: 3px 0 0 3px;
            color: white;
            display: -webkit-box;
            height: 79px;
            left: 0;
            margin: 2px 0 2px 4px;
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            text-overflow: ellipsis;
            text-shadow: 1px 1px #232323;
            top: 0;
            white-space: normal;
            width: 79px
        }

        .mv-page .mv-focused ~ .mv-mask, .mv-page:focus .mv-mask {
            -webkit-transition: background-color 100ms ease-in-out;
            background: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 80%, rgba(255, 255, 255, 0.9));
            background-color: black;
            opacity: 0.35
        }

        .mv-x-hide .mv-x {
            display: none
        }

        .mv-x {
            background-color: transparent;
            border: none;
            cursor: pointer;
            opacity: 0;
            outline: none
        }

        .mv-page .mv-x {
            -webkit-transition: opacity 150ms;
            position: absolute
        }

        .mv-page:hover .mv-x {
            -webkit-transition-delay: 500ms;
            opacity: 1
        }

        .mv-page .mv-x:hover {
            -webkit-transition: none
        }

        .mv-domain {
            bottom: 24px;
            color: #777;
            margin: 0 7px;
            position: absolute;
            text-align: center;
            width: 90%
        }

        .mv-fav {
            background-size: 16px;
            height: 16px;
            pointer-events: none;
            position: absolute;
            width: 16px
        }

        #mv-noti, #mv-noti-error {
            font: bold 12px Arial;
            padding: 10px 0
        }

        #mv-noti span, #mv-noti-error span {
            cursor: default;
            display: inline-block;
            height: 16px;
            line-height: 16px
        }

        #mv-noti-lks span, #mv-noti-error-lks span {
            -webkit-margin-start: 6px;
            color: #1155cc;
            cursor: pointer;
            opacity: 1;
            outline: none;
            padding: 0 4px
        }

        #mv-noti-lks span:hover, #mv-noti-lks span:focus, #mv-noti-error-lks span:hover, #mv-noti-error-lks span:focus {
            text-decoration: underline
        }

        #mv-noti-lks .mv-x, #mv-noti-error-lks .mv-x {
            -webkit-margin-start: 8px;
            display: inline-block;
            opacity: 1;
            position: relative;
            vertical-align: top
        }

        #mv-noti.mv-noti-hide, #mv-noti-error.mv-noti-hide, #mv-noti .mv-link-hide {
            display: none
        }

        form {
            height: 39px
        }

        #fkbx {
            background-color: #fff;
            border: 1px solid rgb(185, 185, 185);
            border-radius: 1px;
            border-top-color: rgb(160, 160, 160);
            cursor: text;
            display: inline-block;
            font: 18px arial, sans-serif;
            height: 36px;
            line-height: 36px;
            max-width: 672px;
            position: relative;
            width: 618px
        }

        #fkbx:hover {
            border: 1px solid #a9a9a9;
            border-top-color: #909090
        }

        .fkbxfcs #fkbx {
            border: 1px solid #4d90fe
        }

        #fkbx > input {
            background: transparent;
            border: none;
            bottom: 0;
            box-sizing: border-box;
            left: 0;
            margin: 0;
            outline: none;
            padding: 0 8px;
            position: absolute;
            top: 2px;
            width: 100%
        }

        html[dir=rtl] #fkbx > input {
            right: 0
        }

        #fkbx-text {
            color: #bbb;
            bottom: 0;
            font-size: 16px;
            left: 9px;
            margin-top: 1px;
            overflow: hidden;
            position: absolute;
            right: 9px;
            text-align: initial;
            text-overflow: ellipsis;
            top: 0;
            visibility: hidden;
            white-space: nowrap
        }

        html[dir=rtl] #fkbx-text {
            left: auto;
            right: 9px
        }

        #fkbx_crt {
            background: #333;
            bottom: 5px;
            position: absolute;
            left: 9px;
            right: auto;
            top: 5px;
            visibility: hidden;
            width: 1px
        }

        html[dir=rtl] #fkbx_crt {
            left: auto;
            right: 9px
        }

        @-webkit-keyframes blink {
            0%, 61.54% {
                opacity: 1
            }
            61.55%, 100% {
                opacity: 0
            }
        }

        .fkbxfcs #fkbx_crt {
            visibility: inherit;
            -webkit-animation: blink 1.3s linear infinite
        }

        #theme-attr {
            bottom: 0;
            display: inline-block;
            font-size: 10pt;
            left: auto;
            position: fixed;
            right: 21px;
            white-space: nowrap;
            z-index: -1
        }

        #theme-attr-msg {
            cursor: default;
            text-align: left
        }

        #fkbx-spch, #fkbx-hspch {
            background: url(data:image/gif;base64,R0lGODlhHAAmAKIHAKqqqsvLy0hISObm5vf394uLiwAAAP///yH5BAEAAAcALAAAAAAcACYAAAO9eLpMIMYIQJi9DcYtKv6KtnHgB4yoAZSXKAyDy1rjoAzjzOQLrx8+4OanCAZnxiExGSEKmz3lj2lwUq3SZ3WZPbKuXGgxu9t4tLYDTkpIRQILF0x2G4lWipM7gj/oJQUkcXsCDCIFATULBCIcZ2tvB3QLDxETFnR/BgU/gRt9jX0gnpYMkJZpFzEoqQqJKAIBaQOVKHAXr3t7txgBjboSvB8EpLoFZywOAo3LFE5lYs/QW9LT1TRk1V7S2xYJADs=) no-repeat center;
            background-size: 14px 19px;
            cursor: pointer;
            display: none;
            float: right;
            height: 21px;
            opacity: 0.55;
            padding: 15px 6px 0;
            width: 17px
        }

        #fkbx-hspch {
            background: url(data:image/gif;base64,R0lGODlhHAAmAKIHAKqqqsvLy0dHR/b29ouLi+Tk5AAAAP///yH5BAEAAAcALAAAAAAcACYAAAOueLo8IMYIMJi9DcYtKv6KtnHgB4yoAZSXmEqs9aIxM4/1cm+5ske9w88QHBZ/x13ytpw1X89UlIYZeYRIxWBWWLhSgkVhJFopTjfzAS0hkLyzMDxCCIy62q/kOt4EDiJyCw8RExaBZyMEOW4bai5qII2FDH0ceBcFX5gKdigCAXgFhCh/F55DI6YYmqkSqx8DkzcEVywOAi65FEE2PL0XOMAyv8M6xcZYQMk+yB8JADs=) no-repeat center;
            background-size: 14px 19px;
            display: none
        }

        #fkbx-spch:hover, #fkbx-hspch:hover {
            opacity: 0.8
        }

        html[dir=rtl] #fkbx-spch, html[dir=rtl] #fkbx-hspch {
            float: left
        }

        #fkbx-hht {
            -webkit-transition: opacity 200ms;
            color: #777;
            float: right;
            font-size: 13px;
            line-height: normal;
            opacity: 0;
            padding-top: 10px
        }

        html[dir=rtl] #fkbx-hht {
            float: left
        }

        #fkbx-hht.fkbx-hht-s {
            opacity: 1
        }

        #recent-tabs {
            color: #1155cc;
            cursor: pointer;
            font-family: Arial;
            font-size: 14px
        }

        #recent-tabs:hover {
            text-decoration: underline
        }

        #lga {
            height: 231px;
            margin-top: 45px;
            text-align: -webkit-center
        }

        #lga > #dood {
            display: inline-block;
            opacity: 0;
            -webkit-transition: opacity 130ms
        }

        #dood.cta {
            cursor: pointer
        }

        #logo-sub {
            color: #777;
            font-size: 16px;
            font-weight: bold;
            left: 83px;
            position: relative;
            top: -28px;
            white-space: nowrap;
            width: 0
        }

        #mngb {
            position: absolute;
            top: 15px;
            -webkit-transition: opacity 130ms;
            width: 100%
        }

        #mngb.h {
            opacity: 0
        }

        #gb #_N2 {
            margin-right: 0;
            padding-top: 0;
            top: 0
        }

        #prpd {
            text-align: start
        }

        span#prt {
            display: block
        }

        #prm, #prt, #pushdown {
            -webkit-user-select: auto
        }

        #prm-pt {
            font-size: 83%;
            position: relative;
            z-index: 1
        }

        ._rzc {
            font-family: 'Roboto'
        }

        body.hide ._rzc {
            display: none
        }

        .des-cla {
        }

        .des-cla #most-visited {
            margin-top: 50px
        }

        .des-cla #mv-tiles {
            height: 276px;
            line-height: 138px
        }

        .des-cla .mv-tile {
            background: -webkit-linear-gradient(#f2f2f2, #e8e8e8);
            border-radius: 4px;
            box-shadow: inset 0 2px 3px rgba(0, 0, 0, .09);
            height: 85px;
            margin-left: 10px;
            margin-right: 10px;
            width: 140px
        }

        .des-cla .mv-tile.mv-bl {
            -webkit-transform: scale(0.5)
        }

        .des-cla .mv-mask {
            border-radius: 3px;
            box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.09);
            height: 83px;
            width: 138px
        }

        .des-cla .mv-page .mv-mask {
            border-style: solid
        }

        .default-theme.des-cla .mv-page .mv-mask {
            border-color: #c0c0c0
        }

        .default-theme.des-cla .mv-page:hover .mv-mask, .default-theme.des-cla .mv-focused ~ .mv-page .mv-mask, .default-theme.des-cla .mv-page:focus .mv-mask {
            border-color: #7f7f7f
        }

        ._F2e .mv-page .mv-focused ~ .mv-mask {
            -webkit-transition: background-color 100ms ease-in-out;
            background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 80%, rgba(255, 255, 255, 0.9));
            background-color: rgba(0, 0, 0, 0.35)
        }

        .des-cla .mv-thumb, .des-cla .mv-locthumb, .des-cla .mv-locgradient, .des-cla .mv-locfallback {
            border: none;
            left: 1px;
            height: 83px;
            top: 1px;
            width: 138px
        }

        .des-cla .mv-title {
            bottom: -27px;
            height: 18px;
            left: 0;
            width: 140px
        }

        .des-cla .mv-locfallback .mv-domain {
            bottom: 24px;
            margin: 0 7px;
            width: 124px
        }

        .des-cla .mv-locfallback img {
            border-radius: 3px;
            width: 138px
        }

        .des-cla .mv-x {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAiElEQVR42r2RsQrDMAxEBRdl8SDcX8lQPGg1GBI6lvz/h7QyRRXV0qUULwfvwZ1tenw5PxToRPWMC52eA9+WDnlh3HFQ/xBQl86NFYJqeGflkiogrOvVlIFhqURFVho3x1moGAa3deMs+LS30CAhBN5nNxeT5hbJ1zwmji2k+aF6NENIPf/hs54f0sZFUVAMigAAAABJRU5ErkJggg==');
            border-radius: 2px;
            height: 16px;
            width: 16px
        }

        .des-cla .mv-x:hover, .des-cla .mv-x:focus {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAqklEQVR4XqWRMQ6DMAxF/1Fyilyj2SmIBUG5QcTCyJA5Z8jGhlBPgRi4TmoDraVmKFJlWYrlp/g5QfwRlwEVNWVa4WzfH9jK6kCkEkBjwxOhLghheMWMELUAqqwQ4OCbnE4LJnhr5IYdqQt4DJQjhe9u4vBBmnxHHNzRFkDGjHDo0VuTAqy2vAG4NkvXXDHxbGsIGlj3e835VFNtdugma/Jk0eXq0lP//5svi4PtO01oFfYAAAAASUVORK5CYII=')
        }

        .des-cla .mv-page .mv-x {
            right: 2px;
            top: 2px
        }

        html[dir=rtl] .des-cla .mv-page .mv-x {
            left: 2px;
            right: auto
        }

        .des-cla .mv-fav {
            bottom: -7px;
            left: 62px
        }

        .des-cla #fkbx {
            box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.1)
        }

        .des-cla #fkbx-text {
            visibility: hidden
        }

        .des-cla #mv-tiles {
            width: 320px
        }

        .des-cla #fkbx {
            width: 298px
        }

        @media only screen and (min-width: 660px) {
            .des-cla #mv-tiles {
                width: 480px
            }

            .des-cla #fkbx {
                width: 458px
            }
        }

        @media only screen and (min-width: 820px) {
            .des-cla #mv-tiles {
                width: 640px
            }

            .des-cla #fkbx {
                width: 618px
            }
        }

        .des-mat {
        }

        .des-mat #most-visited {
            margin-top: 63px
        }

        .des-mat #mv-tiles {
            height: 292px;
            line-height: 146px
        }

        .des-mat .mv-tile {
            background: rgb(242, 242, 242);
            border-radius: 2px;
            height: 130px;
            margin-left: 8px;
            margin-right: 8px;
            width: 156px
        }

        .des-mat.light-text .mv-tile {
            background: rgb(51, 51, 51)
        }

        .des-mat .mv-tile.mv-bl {
            -webkit-transform: scale(0);
            -webkit-transform-origin: 0 41px;
            margin-left: 0;
            margin-right: 0;
            width: 0
        }

        .des-mat .mv-mask {
            border-color: transparent;
            border-radius: 2px;
            height: 128px;
            width: 154px
        }

        .default-theme.des-mat .mv-page .mv-mask {
            -webkit-transition: box-shadow 200ms, border 200ms
        }

        .default-theme.des-mat .mv-page:hover .mv-mask, .default-theme.des-mat .mv-page .mv-focused ~ .mv-mask {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 8px 0 rgba(0, 0, 0, 0.2)
        }

        .des-mat .mv-page .mv-focused ~ .mv-mask {
            -webkit-transition: box-shadow 200ms, border 200ms, background-color 100ms ease-in-out;
            background: rgba(0, 0, 0, 0.3);
            border-color: rgba(0, 0, 0, 0.3)
        }

        .des-mat .mv-thumb, .des-mat .mv-locthumb, .des-mat .mv-locgradient, .des-mat .mv-locfallback {
            border: none;
            border-radius: 0;
            height: 94px;
            left: 4px;
            top: 32px;
            width: 148px
        }

        .des-mat .mv-title {
            bottom: auto;
            height: 15px;
            left: 32px;
            top: 9px;
            width: 120px
        }

        html[dir=rtl] .des-mat .mv-title {
            left: auto;
            right: 32px
        }

        @media (-webkit-min-device-pixel-ratio: 2) {
            .des-mat .mv-title {
                top: 8px
            }
        }

        .des-mat .mv-locfallback .mv-dot-bg {
            background: #fff;
            height: 100%;
            width: 100%
        }

        .des-mat.light-text .mv-locfallback .mv-dot-bg {
            background: #555
        }

        .des-mat .mv-locfallback .mv-dot {
            background-color: #f2f2f2;
            border-radius: 8px;
            display: block;
            height: 16px;
            left: 50%;
            margin-left: -8px;
            margin-top: -8px;
            position: absolute;
            top: 50%;
            width: 16px
        }

        .des-mat.light-text .mv-locfallback .mv-dot {
            background-color: #333
        }

        .des-mat .mv-locfallback img {
            width: 148px
        }

        .des-mat .mv-x {
            border-radius: 2px;
            height: 32px;
            width: 32px
        }

        .des-mat .mv-x .mv-x-inner {
            -webkit-mask-image: -webkit-image-set(url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAQAAAAnOwc2AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAA7DAAAOwwHHb6hkAAAALklEQVQI12NgaABCZADmNzD8RxKG8xDCKAogHFQ9UGE0IayCWLRjsQirk7A4HgDcDSHxzPGFWwAAAABJRU5ErkJggg==') 1x, url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAQAAAAngNWGAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAV0lEQVQoz42TWw4AEAwE9+i9OR8EDV3jSzqTVB8kKRRyZ/JQUzPq4uNSqYnW6kXe6jN6B8s8GdiXb+gLPNSPllU/BCrC1LAY2B7YcDhCuBR4zfDiwq/QAfvmh51S6zwEAAAAAElFTkSuQmCC') 2x);
            -webkit-mask-repeat: no-repeat;
            -webkit-mask-size: 10px 10px;
            background-color: rgba(90, 90, 90, 0.7);
            height: 10px;
            left: 50%;
            margin-left: -5px;
            margin-top: -5px;
            position: absolute;
            top: 50%;
            width: 10px
        }

        .des-mat.light-text .mv-x .mv-x-inner {
            background-color: rgba(255, 255, 255, 0.7)
        }

        .des-mat .mv-x:hover .mv-x-inner, .des-mat #_z1e:focus .mv-x-inner {
            background-color: rgb(90, 90, 90)
        }

        .des-mat.light-text .mv-x:hover .mv-x-inner, .des-mat.light-text #_z1e:focus .mv-x-inner {
            background-color: rgb(255, 255, 255)
        }

        .des-mat .mv-x:active .mv-x-inner, .des-mat #_z1e:active .mv-x-inner {
            background-color: rgb(66, 133, 244)
        }

        .des-mat.light-text .mv-x:active .mv-x-inner, .des-mat.light-text #_z1e:active .mv-x-inner {
            background-color: rgba(255, 255, 255, 0.5)
        }

        .des-mat .mv-page .mv-x {
            background: linear-gradient(to right, transparent, rgb(242, 242, 242) 10%);
            right: 0;
            top: 0
        }

        html[dir=rtl] .des-mat .mv-page .mv-x {
            background: linear-gradient(to left, transparent, rgb(242, 242, 242) 10%);
            left: 0;
            right: auto
        }

        .des-mat.light-text .mv-page .mv-x {
            background: linear-gradient(to right, transparent, rgba(51, 51, 51, 0.9) 30%)
        }

        html[dir=rtl] .des-mat.light-text .mv-page .mv-x {
            background: linear-gradient(to left, transparent, rgba(51, 51, 51, 0.9) 30%)
        }

        .des-mat .mv-fav {
            left: 8px;
            top: 8px
        }

        html[dir=rtl] .des-mat .mv-fav {
            left: auto;
            right: 8px
        }

        .des-mat #mv-noti-lks .mv-x, .des-mat#mv-noti-error-lks .mv-x {
            -webkit-transform: translate(0, -8px)
        }

        .des-mat #mv-tiles {
            width: 344px
        }

        .des-mat #fkbx-text {
            visibility: inherit
        }

        .des-mat #fkbx {
            width: 326px
        }

        @media only screen and (min-width: 700px) {
            .des-mat #mv-tiles {
                width: 516px
            }

            .des-mat #fkbx {
                width: 498px
            }
        }

        @media only screen and (min-width: 872px) {
            .des-mat #mv-tiles {
                width: 688px
            }

            .des-mat #fkbx {
                width: 670px
            }
        }

        .des-ico {
        }

        .des-ico #most-visited {
            margin-top: 63px
        }

        .des-ico #mv-tiles {
            height: 292px;
            line-height: 146px
        }

        .des-ico .mv-tile {
            background: rgb(242, 242, 242);
            border-radius: 2px;
            height: 130px;
            margin-left: 8px;
            margin-right: 8px;
            width: 156px
        }

        .des-ico.light-text .mv-tile {
            background: rgb(51, 51, 51)
        }

        .des-ico .mv-tile.mv-bl {
            -webkit-transform: scale(0);
            -webkit-transform-origin: 0 41px;
            margin-left: 0;
            margin-right: 0;
            width: 0
        }

        .des-ico .mv-mask {
            border-color: transparent;
            border-radius: 2px;
            height: 128px;
            width: 154px
        }

        .default-theme.des-ico .mv-page .mv-mask {
            -webkit-transition: box-shadow 200ms, border 200ms
        }

        .default-theme.des-ico .mv-page:hover .mv-mask, .default-theme.des-ico .mv-page .mv-focused ~ .mv-mask {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 8px 0 rgba(0, 0, 0, 0.2)
        }

        .des-ico .mv-page .mv-focused ~ .mv-mask {
            -webkit-transition: box-shadow 200ms, border 200ms, background-color 100ms ease-in-out;
            background: rgba(0, 0, 0, 0.3);
            border-color: rgba(0, 0, 0, 0.3)
        }

        .des-ico .mv-thumb, .des-ico .mv-locthumb, .des-ico .mv-locgradient, .des-ico .mv-locfallback {
            border: none;
            border-radius: 0;
            height: 94px;
            left: 4px;
            top: 32px;
            width: 148px
        }

        .des-ico .mv-title {
            bottom: auto;
            height: 15px;
            left: 32px;
            top: 9px;
            width: 120px
        }

        html[dir=rtl] .des-ico .mv-title {
            left: auto;
            right: 32px
        }

        @media (-webkit-min-device-pixel-ratio: 2) {
            .des-ico .mv-title {
                top: 8px
            }
        }

        .des-ico .mv-locfallback .mv-dot-bg {
            background: #fff;
            height: 100%;
            width: 100%
        }

        .des-ico.light-text .mv-locfallback .mv-dot-bg {
            background: #555
        }

        .des-ico .mv-locfallback .mv-dot {
            background-color: #f2f2f2;
            border-radius: 8px;
            display: block;
            height: 16px;
            left: 50%;
            margin-left: -8px;
            margin-top: -8px;
            position: absolute;
            top: 50%;
            width: 16px
        }

        .des-ico.light-text .mv-locfallback .mv-dot {
            background-color: #333
        }

        .des-ico .mv-locfallback img {
            width: 148px
        }

        .des-ico .mv-x {
            border-radius: 2px;
            height: 32px;
            width: 32px
        }

        .des-ico .mv-x .mv-x-inner {
            -webkit-mask-image: -webkit-image-set(url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAQAAAAnOwc2AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAA7DAAAOwwHHb6hkAAAALklEQVQI12NgaABCZADmNzD8RxKG8xDCKAogHFQ9UGE0IayCWLRjsQirk7A4HgDcDSHxzPGFWwAAAABJRU5ErkJggg==') 1x, url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAQAAAAngNWGAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAV0lEQVQoz42TWw4AEAwE9+i9OR8EDV3jSzqTVB8kKRRyZ/JQUzPq4uNSqYnW6kXe6jN6B8s8GdiXb+gLPNSPllU/BCrC1LAY2B7YcDhCuBR4zfDiwq/QAfvmh51S6zwEAAAAAElFTkSuQmCC') 2x);
            -webkit-mask-repeat: no-repeat;
            -webkit-mask-size: 10px 10px;
            background-color: rgba(90, 90, 90, 0.7);
            height: 10px;
            left: 50%;
            margin-left: -5px;
            margin-top: -5px;
            position: absolute;
            top: 50%;
            width: 10px
        }

        .des-ico.light-text .mv-x .mv-x-inner {
            background-color: rgba(255, 255, 255, 0.7)
        }

        .des-ico .mv-x:hover .mv-x-inner, .des-ico #_z1e:focus .mv-x-inner {
            background-color: rgb(90, 90, 90)
        }

        .des-ico.light-text .mv-x:hover .mv-x-inner, .des-ico.light-text #_z1e:focus .mv-x-inner {
            background-color: rgb(255, 255, 255)
        }

        .des-ico .mv-x:active .mv-x-inner, .des-ico #_z1e:active .mv-x-inner {
            background-color: rgb(66, 133, 244)
        }

        .des-ico.light-text .mv-x:active .mv-x-inner, .des-ico.light-text #_z1e:active .mv-x-inner {
            background-color: rgba(255, 255, 255, 0.5)
        }

        .des-ico .mv-page .mv-x {
            background: linear-gradient(to right, transparent, rgb(242, 242, 242) 10%);
            right: 0;
            top: 0
        }

        html[dir=rtl] .des-ico .mv-page .mv-x {
            background: linear-gradient(to left, transparent, rgb(242, 242, 242) 10%);
            left: 0;
            right: auto
        }

        .des-ico.light-text .mv-page .mv-x {
            background: linear-gradient(to right, transparent, rgba(51, 51, 51, 0.9) 30%)
        }

        html[dir=rtl] .des-ico.light-text .mv-page .mv-x {
            background: linear-gradient(to left, transparent, rgba(51, 51, 51, 0.9) 30%)
        }

        .des-ico .mv-fav {
            left: 8px;
            top: 8px
        }

        html[dir=rtl] .des-ico .mv-fav {
            left: auto;
            right: 8px
        }

        .des-ico #mv-noti-lks .mv-x, .des-ico#mv-noti-error-lks .mv-x {
            -webkit-transform: translate(0, -8px)
        }

        .des-ico #mv-tiles {
            width: 344px
        }

        .des-ico #fkbx-text {
            visibility: inherit
        }

        .des-ico #fkbx {
            width: 326px
        }

        @media only screen and (min-width: 700px) {
            .des-ico #mv-tiles {
                width: 516px
            }

            .des-ico #fkbx {
                width: 498px
            }
        }

        @media only screen and (min-width: 872px) {
            .des-ico #mv-tiles {
                width: 688px
            }

            .des-ico #fkbx {
                width: 670px
            }
        }

        .fkbx-drgfcs {
        }

        #fkbx_crt {
        }

        .fkbxfcs {
        }

        .fkbx-drgfcs #fkbx-text, .fkbxfcs #fkbx-text {
            visibility: hidden
        }

        .fkbx-drgfcs #fkbx_crt {
            visibility: inherit
        }

        .s2er {
        }

        .s2fp {
        }

        .s2fp-h {
        }

        .s2ml {
        }

        .s2ra {
        }

        .s2tb {
        }

        .s2tb-h {
        }

        .spch {
        }

        .spchc {
        }

        .spch {
            background: #fff;
            height: 100%;
            left: 0;
            opacity: 0;
            overflow: hidden;
            position: fixed;
            text-align: left;
            top: 0;
            visibility: hidden;
            width: 100%;
            z-index: 10000;
            transition: visibility 0s linear 0.218s, opacity 0.218s, background-color 0.218s
        }

        .s2fp.spch {
            opacity: 1;
            visibility: visible;
            transition-delay: 0s
        }

        .s2tb-h.spch {
            background: rgba(255, 255, 255, 0);
            opacity: 0;
            visibility: hidden
        }

        .s2tb.spch {
            background: rgba(255, 255, 255, 0);
            opacity: 1;
            visibility: visible;
            transition-delay: 0s
        }

        .close-button {
            color: #777;
            cursor: pointer;
            font-size: 26px;
            right: 0;
            height: 11px;
            line-height: 15px;
            margin: 15px;
            opacity: .6;
            padding: 0;
            position: absolute;
            top: 0;
            width: 15px
        }

        .close-button:hover {
            opacity: .8
        }

        .close-button:active {
            opacity: 1
        }

        .google-logo {
            background: url(data:image/gif;base64,R0lGODlhxABEAMIGALGzsMPFwtHT0N/h3u3v7P3//P///////yH5BAEKAAcALAAAAADEAEQAAAP+WLrc/jDKSau9OJcBuveCJo5kaZ7oJHwsMKSwQsx0bN84M+zDygY5DaEXaH0CggEhyGwKWyGnhCAoGq+ewEvK7cpaW++C+lMuZUOrUXAWu20E8Lvg62grAzUrOu+X4ixhXYAebRYcV4J+ixaEHopOdQB8GpIgjJiNcl16lCKIj5miE44dkEF6pxqgqqOupS5ckp4kgK2uo7C3MKAAQClFhrjDX4FOpcK1ycTDuk56v8zScJtBvQDL09ojzkx6ALlEVgFIuxdU5EXkSdmD1RRDVepI7aW0c3lYWe2k30Z33Ijoq9ZtQj599yyZc9KL3YyDR/g5IKBGCw2IHxbq8Df+cFKDghAoguBhqYOwFotEdrhXQGVGC3UCLHN5CU8WMxgf8XgA0kGdhC3awPLjSKI/lgzU7CoZLYKaZNd81XvX4GmEkmcsNRVTtIK/W2qQMmAqwSrPFlsZ9FygdMK3X2/nONIICxuEiheO3g0VIWraYi8dgPr7UU7cN3owRAXn84NEtUagfqDw9ayxwoUqoC2w2U3DDHohT8ZAtsEReJ0xB046msLm1F4uX1hc9YNYy7LpnKYcdCJVR4TVdjpjxDOLxw6MhCmlkfUP5ytt5gbMd8EsCRABLigu5puI0rpXz+be8rnmPb6nd+I5a1lkMShXkf/WnIFy6r4sfKPVE73+8JtlQeHFUE/0xtl0+gm4QXwUKJSeeKVEAxEbDcLGkIGgybFWBSVFAQtyDqpWXXkRxdQcbV1gJUJlsNwGgV/4eUTBNbiN+OEMItRVH0889OijEuGJd0FJL8AS3BSpkSeBJH+B9GEJHNVS0hoKdPiJhkqeo2CQNQWY2YM2UpXBYju2xBSVCsAo33EksjDCO+9JYFtIVFmowRVC4NiAijEyNiaD993JpnV2jtUlmKbUNugIU7oIE4YHIjijeQX4c2QEDLJV6ILRRdCTlbVcgVyFi1a6KXayoYiBPQ8wJQgZiSI5XV2jQjClXSaUJOKXQ7ppn5gGlarDFeQIW2Osv1L+OgJHl3KYqQKh5SUkeI9mYRBHQtKJ4JRlinZqta2NEWcFwD0QaIK8wtOmB5pImsgfxNbamK97fltvuuJCiuqIhzzrKbCLxUJCwAJX4i+0W8qK7Ly7uXZor8YeW/C9CU8h8T4G0+tAZQpP3Kq9pna6ZkSoSYrwu55SyBO2UpF2sKb+1YicX9m45Ki2+iKan1P6WHSRFRIR7IvKIeXUQbBgGJJdrTStZAisLUN5hVjMJgEkxR3ZMeqtPwjgtdeWsgPuDz/Iu4DR/3RrLrEvdnRK01iUiXZH5QxcRdonoPMP0TnuIE/PPNEguOCk3I33H+L8gIRDN+iZQw2Is4yFTI+RE77N5VO8xXiVbGPuOVfQ3FKXjJ+XzgRz5EZp+uqNR3wVsKzHXiC+zjYs++0aQLOs7bj3XjK/Wlrr+/AquH6eHcQnv5djJISl/PPQLZyhSdBXf5gI4VaffFRmA6a29pdniW6z4Mc+pbw+kF9+7Bw5qpL667NP7NVqTRh/+ULbYWn397PO9Rr865/s4hE2+rkiAQA7) no-repeat center;
            background-size: 98px 34px;
            float: right;
            height: 34px;
            left: 255px;
            opacity: 0;
            pointer-events: none;
            position: relative;
            top: 6px;
            width: 98px;
            transition: opacity .5s ease-in, left .5s ease-in
        }

        .s2tb .google-logo {
            opacity: 1;
            left: 270px;
            transition: opacity .5s ease-out, left .5s ease-out
        }

        .spchc {
            display: block;
            height: 27px;
            position: absolute;
            pointer-events: none
        }

        .s2fp .spchc, .s2fp-h .spchc {
            margin: auto;
            margin-top: 312px;
            max-width: 572px;
            min-width: 534px;
            padding: 0 223px;
            position: relative;
            top: 0
        }

        .s2tb .spchc, .s2tb-h .spchc {
            background: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            margin: 0;
            min-width: 100%;
            overflow: hidden;
            padding: 51px 0 65px 126px;
            position: absolute
        }

        ._o3 {
            height: 100%;
            opacity: .1;
            pointer-events: none;
            width: 100%;
            transition: opacity .318s ease-in
        }

        .s2tb-h ._o3, .s2tb ._o3 {
            height: 100%;
            width: 572px;
            transition: opacity .318s ease-in
        }

        .s2ml ._o3, .s2ra ._o3, .s2er ._o3 {
            opacity: 1;
            transition: opacity 0s
        }

        .button {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 100%;
            bottom: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
            cursor: pointer;
            display: inline-block;
            left: 0;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            right: 0;
            top: 0;
            transition: background-color 0.218s, border 0.218s, box-shadow 0.218s
        }

        .s2tb-h .button {
            left: -83px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: -83px;
            transition-delay: 0
        }

        .s2fp-h .button {
            opacity: 0;
            pointer-events: none;
            position: absolute;
            transition-delay: 0
        }

        .s2fp .button, .s2tb .button {
            opacity: 1;
            pointer-events: auto;
            position: absolute;
            -webkit-transform: scale(1);
            transition-delay: 0
        }

        .s2ra .button {
            background-color: #ff4444;
            border: 0;
            box-shadow: none
        }

        ._CMb {
            background-color: #dbdbdb;
            border-radius: 100%;
            display: inline-block;
            height: 301px;
            left: -69px;
            opacity: 1;
            pointer-events: none;
            position: absolute;
            top: -69px;
            width: 301px;
            -webkit-transform: scale(.01);
            transition: opacity 0.218s
        }

        .s2tb-h ._CMb, .s2tb ._CMb {
            height: 151px;
            left: -28px;
            top: -28px;
            width: 151px
        }

        ._AM {
            float: right;
            pointer-events: none;
            position: relative;
            transition: -webkit-transform 0.218s, opacity 0.218s ease-in
        }

        .s2fp-h ._AM, .s2fp ._AM {
            height: 165px;
            right: -70px;
            top: -70px;
            width: 165px
        }

        .s2fp-h ._AM, .s2tb-h ._AM {
            -webkit-transform: scale(.1)
        }

        .s2fp ._AM, .s2tb ._AM {
            -webkit-transform: scale(1)
        }

        .s2tb-h ._AM, .s2tb ._AM {
            height: 95px;
            right: -31px;
            top: -27px;
            width: 95px
        }

        .s2ra .button:active {
            background-color: #cd0000
        }

        .button:active {
            background-color: #eee
        }

        ._wPb {
            height: 87px;
            left: 43px;
            pointer-events: none;
            position: absolute;
            top: 47px;
            width: 42px;
            -webkit-transform: scale(1)
        }

        .s2tb-h ._wPb, .s2tb ._wPb {
            left: 17px;
            top: 7px;
            -webkit-transform: scale(.53)
        }

        ._AUb {
            background-color: #999;
            border-radius: 30px;
            height: 46px;
            left: 25px;
            pointer-events: none;
            position: absolute;
            width: 24px
        }

        ._Fjd {
            bottom: 0;
            height: 53px;
            left: 11px;
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            width: 52px
        }

        ._oXb {
            background-color: #999;
            bottom: 14px;
            height: 14px;
            left: 22px;
            pointer-events: none;
            position: absolute;
            width: 9px;
            z-index: 1
        }

        ._dWb {
            border: 7px solid #999;
            border-radius: 28px;
            bottom: 27px;
            height: 57px;
            pointer-events: none;
            position: absolute;
            width: 38px;
            z-index: 0
        }

        .s2ml ._AUb, .s2ml ._oXb {
            background-color: #f44
        }

        .s2ml ._dWb {
            border-color: #f44
        }

        .s2ra ._AUb, .s2ra ._oXb {
            background-color: #fff
        }

        .s2ra ._dWb {
            border-color: #fff
        }

        .spcht {
        }

        .spchta {
        }

        .spch-2l {
        }

        .spch-3l {
        }

        .spch-4l {
        }

        .spch-5l {
        }

        ._gjb {
            pointer-events: none
        }

        .s2fp-h ._gjb, .s2fp ._gjb {
            position: absolute
        }

        .s2tb-h ._gjb, .s2tb ._gjb {
            position: relative
        }

        .spcht {
            font-weight: normal;
            line-height: 1.2;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            text-align: left;
            -webkit-font-smoothing: antialiased;
            transition: opacity .1s ease-in, margin-left .5s ease-in, top 0s linear 0.218s
        }

        .s2fp-h .spcht {
            margin-left: 44px
        }

        .s2tb-h .spcht {
            margin-left: 32px
        }

        .s2fp-h .spcht, .s2fp .spcht {
            font-size: 32px;
            left: -44px;
            top: -.2em;
            width: 460px
        }

        .s2tb-h .spcht, .s2tb .spcht {
            font-size: 27px;
            left: 7px;
            top: .2em;
            width: 490px
        }

        .s2fp .spcht, .s2tb .spcht {
            margin-left: 0;
            opacity: 1;
            transition: opacity .5s ease-out, margin-left .5s ease-out
        }

        .spchta {
            color: #1155cc;
            cursor: pointer;
            font-size: 18px;
            font-weight: 500;
            pointer-events: auto;
            text-decoration: underline
        }

        .spch-2l.spcht, .spch-3l.spcht, .spch-4l.spcht {
            transition: top 0.218s ease-out
        }

        .spch-2l.spcht {
            top: -.6em
        }

        .spch-3l.spcht {
            top: -1.3em
        }

        .spch-4l.spcht {
            top: -1.7em
        }

        .s2fp .spch-5l.spcht {
            top: -2.5em
        }

        .s2tb .spch-5l.spcht {
            font-size: 24px;
            top: -1.7em;
            transition: font-size 0.218s ease-out
        }

        .s2wfp {
        }

        ._ypc {
            margin-top: -100px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            width: 500px;
            transition: opacity 0.218s ease-in, margin-top .4s ease-in
        }

        .s2wfp ._ypc {
            margin-top: -300px;
            opacity: 1;
            transition: opacity .5s ease-out 0.218s, margin-top 0.218s ease-out 0.218s
        }

        ._zpc {
            box-shadow: 0 1px 0px #4285F4;
            height: 80px;
            left: 0;
            margin: 0;
            opacity: 0;
            pointer-events: none;
            position: fixed;
            right: 0;
            top: -80px;
            transition: opacity 0.218s, box-shadow 0.218s
        }

        .s2wfp ._zpc {
            box-shadow: 0 1px 80px #4285F4;
            opacity: 1;
            pointer-events: none;
            -webkit-animation: allow-alert .75s 0 infinite;
            -webkit-animation-direction: alternate;
            -webkit-animation-timing-function: ease-out;
            transition: opacity 0.218s, box-shadow 0.218s
        }

        @-webkit-keyframes allow-alert {
            from {
                opacity: 1
            }
            to {
                opacity: .35
            }
        }

        #fkbx-tchm {
        }

        .fkbx-chm {
        }

        .fkbx-chme {
        }

        #fkbx-chmer {
        }

        #fkbx-chmed {
        }

        .fkbx-chmt {
        }

        #fkbx-chmtr {
        }

        .chw-oc {
        }

        #chw-o {
        }

        #fkbx-tchm {
            display: none
        }

        .fkbx-chm {
            line-height: 22px;
            text-align: center
        }

        .fkbx-chm a {
            color: #2518b5;
            cursor: pointer;
            margin: 5px
        }

        ._gSc {
            background: url(data:image/gif;base64,R0lGODlhEAAQAKIHAPzu7PfT0Oh5cfGtqONbUuBLQeBKP////yH5BAEAAAcALAAAAAAQABAAAANKeLrcfkAI8NowZtQFCCbUJmCYsAWFAQBGEVSjyhqmc2HBnDUdGQQkEOOGA5I0CkCKxMQUQjEnAMU0GUkuZTPgaRaWTEK0Sa5tGgkAOw==) no-repeat center;
            display: inline-block;
            height: 16px;
            width: 16px
        }

        #chw-o {
            display: none
        }

        #chw-o a {
            color: #4285F4;
            line-height: 31px
        }

        .chw-oc {
            font-size: 13px;
            padding: 20px !important;
            text-align: left;
            width: 400px
        }

        ._mSc {
            color: #000;
            font-size: 16px;
            font-weight: bold
        }

        ._kSc {
            color: #555
        }

        ._dKb {
            border-radius: 2px;
            cursor: pointer;
            font-size: 12px;
            line-height: 27px;
            margin: 0;
            padding-left: 14px;
            padding-right: 14px
        }

        #chw-o ._dKb {
            float: right;
            margin-left: 10px
        }

        ._k3 {
            background-color: #f9f9f9;
            border: 1px solid #bdbdbd;
            color: #000
        }

        ._k3:hover {
            background-color: #fcfcfc
        }

        ._k3:active, ._k3:hover, ._k3:focus {
            border-color: #3e7ef8
        }

        ._k3:active {
            background-color: #e6e6e6
        }

        ._WW {
            background-color: #5a97ff;
            border: 1px solid #2558b0;
            color: #fff
        }

        ._WW:hover {
            background-color: #629cff
        }

        ._WW:hover, ._WW:focus {
            box-shadow: inset 0 0 1px
        }

        ._WW:active, ._qyd:focus, ._WW:hover {
            border-color: #2352a2
        }

        ._WW:active {
            background-color: #4279d8
        }</style>
    <link href="//ssl.gstatic.com/chrome/components/doodle-notifier-01.html" rel="import">
    <meta content="none" name="robots">
    <script>(function () {
            window.google = {
                kEI: 'PIlBVcbfHoiQuASQxoCwDQ',
                kEXPI: '4017578,4020346,4023709,4026241,4026624,4028932,4029815,4029973,4030091,4031622,4031691,4031707,4032410,4032480,4032500,4032568,4032621,4032643,4032645,4032678,4032908,4033243,4033256,4034154,4034336,4034408,4034442,4034892,8300095,8500394,8500886,8501248,8501280,8501295,8501351,8501407,10200083,10200096,10200682,10201002,10201138',
                authuser: 0,
                esrp: {sourceid: 'chrome-psyapi2'},
                esrnh: false,
                kSID: 'c9c918f0_22'
            };
            google.kHL = 'en-ID';
        })();
        (function () {
            google.lc = [];
            google.li = 0;
            google.getEI = function (a) {
                for (var b; a && (!a.getAttribute || !(b = a.getAttribute("eid")));)a = a.parentNode;
                return b || google.kEI
            };
            google.getLEI = function (a) {
                for (var b = null; a && (!a.getAttribute || !(b = a.getAttribute("leid")));)a = a.parentNode;
                return b
            };
            google.https = function () {
                return "https:" == window.location.protocol
            };
            google.ml = function () {
            };
            google.time = function () {
                return (new Date).getTime()
            };
            google.log = function (a, b, e, f, l) {
                var d = new Image, h = google.lc, g = google.li, c = "", m = google.ls || "";
                d.onerror = d.onload = d.onabort = function () {
                    delete h[g]
                };
                h[g] = d;
                if (!e && -1 == b.search("&ei=")) {
                    var k = google.getEI(f), c = "&ei=" + k;
                    -1 == b.search("&lei=") && ((f = google.getLEI(f)) ? c += "&lei=" + f : k != google.kEI && (c += "&lei=" + google.kEI))
                }
                a = e || "/" + (l || "gen_204") + "?atyp=i&ct=" + a + "&cad=" + b + c + m + "&zx=" + google.time();
                /^http:/i.test(a) && google.https() ? (google.ml(Error("a"), !1, {
                    src: a,
                    glmm: 1
                }), delete h[g]) : (window.google && window.google.vel &&
                window.google.vel.lu && window.google.vel.lu(a), d.src = a, google.li = g + 1)
            };
            google.y = {};
            google.x = function (a, b) {
                google.y[a.id] = [a, b];
                return !1
            };
            google.load = function (a, b, e) {
                google.x({id: a + n++}, function () {
                    google.load(a, b, e)
                })
            };
            var n = 0;
        })();
        google.kCSI = {};
        (function () {
            window.chrome || (window.chrome = {});
            window.chrome.embeddedSearch || (window.chrome.embeddedSearch = {});
            window.chrome.embeddedSearch.searchBox || (window.chrome.embeddedSearch.searchBox = {});
            window.chrome.embeddedSearch.searchBox.onsubmit = function () {
                google.x({id: "psyapi"}, function (f, a) {
                    google.esrp.q = f;
                    var b = google.essp;
                    if (b)for (var c = 0; c < b.length; c++) {
                        var d = b[c];
                        google.esrp[d.n] = d.v
                    }
                    if (a)for (var e in a)google.esrp[e] = encodeURIComponent(a[e]);
                    var g = google.esrnh;
                    google.esrnh = !1;
                    return function () {
                        google.nav.search(google.esrp, !1, g, !!google.essp)
                    }
                }(encodeURIComponent(window.chrome.embeddedSearch.searchBox.value), window.chrome.embeddedSearch.searchBox.requestParams))
            };
        })();
        (function () {
            window.google.sn = 'newtab';
            google.timers = {};
            google.startTick = function (a, b) {
                google.timers[a] = {t: {start: google.time()}, bfr: !!b};
                window.performance && window.performance.now && (google.timers[a].wsrt = Math.floor(window.performance.now()))
            };
            google.tick = function (a, b, c) {
                google.timers[a] || google.startTick(a);
                google.timers[a].t[b] = c || google.time()
            };
            google.startTick("load", !0);
            google.iml = function (a, b) {
                google.tick("iml", a.id || a.src || a.name, b)
            };
        })();
        google.aft = function () {
        };
        try {
            google['pt'] = window['chrome'] && window['chrome']['csi'] && Math.floor(window['chrome']['csi']()['pageT']);
        } catch (e) {
        }
        (function () {
            'use strict';
            var g = this, aa = function (a) {
                var d = typeof a;
                if ("object" == d)if (a) {
                    if (a instanceof Array)return "array";
                    if (a instanceof Object)return d;
                    var b = Object.prototype.toString.call(a);
                    if ("[object Window]" == b)return "object";
                    if ("[object Array]" == b || "number" == typeof a.length && "undefined" != typeof a.splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("splice"))return "array";
                    if ("[object Function]" == b || "undefined" != typeof a.call && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("call"))return "function"
                } else return "null"; else if ("function" == d && "undefined" == typeof a.call)return "object";
                return d
            }, h = Date.now || function () {
                    return +new Date
                };
            var l = {};
            var ba = function (a, d) {
                if (null === d)return !1;
                if ("contains"in a && 1 == d.nodeType)return a.contains(d);
                if ("compareDocumentPosition"in a)return a == d || Boolean(a.compareDocumentPosition(d) & 16);
                for (; d && a != d;)d = d.parentNode;
                return d == a
            };
            var ca = function (a, d) {
                return function (b) {
                    b || (b = window.event);
                    return d.call(a, b)
                }
            }, u = function (a) {
                a = a.target || a.srcElement;
                !a.getAttribute && a.parentNode && (a = a.parentNode);
                return a
            }, v = "undefined" != typeof navigator && /Macintosh/.test(navigator.userAgent), da = "undefined" != typeof navigator && !/Opera/.test(navigator.userAgent) && /WebKit/.test(navigator.userAgent), fa = function (a) {
                var d = a.which || a.keyCode || a.key;
                da && 3 == d && (d = 13);
                if (13 != d && 32 != d)return !1;
                var b = u(a), c = (b.getAttribute("role") || b.type || b.tagName).toUpperCase(), e;
                (e = "keydown" != a.type) || ("getAttribute"in b ? (e = (b.getAttribute("role") || b.type || b.tagName).toUpperCase(), e = "TEXT" != e && "TEXTAREA" != e && "PASSWORD" != e && "SEARCH" != e && ("COMBOBOX" != e || "INPUT" != b.tagName.toUpperCase()) && !b.isContentEditable) : e = !1, e = !e);
                if (e || a.ctrlKey || a.shiftKey || a.altKey || a.metaKey || "INPUT" == b.tagName.toUpperCase() && b.type && b.type.toUpperCase()in w && 32 == d)return !1;
                if (a.originalTarget &&
                    a.originalTarget != b)return !0;
                (a = b.tagName in ea) || (a = b.getAttributeNode("tabindex"), a = null != a && a.specified);
                if (!(a && 0 <= b.tabIndex) || b.disabled)return !1;
                b = "INPUT" != b.tagName.toUpperCase() || b.type;
                a = !(c in z) && 13 == d;
                return (0 == z[c] % d || a) && !!b
            }, ea = {A: 1, INPUT: 1, TEXTAREA: 1, SELECT: 1, BUTTON: 1}, ga = function () {
                this._mouseEventsPrevented = !0
            }, z = {
                A: 13,
                BUTTON: 0,
                CHECKBOX: 32,
                COMBOBOX: 13,
                LINK: 13,
                LISTBOX: 13,
                MENU: 0,
                MENUBAR: 0,
                MENUITEM: 0,
                MENUITEMCHECKBOX: 0,
                MENUITEMRADIO: 0,
                OPTION: 32,
                RADIO: 32,
                RADIOGROUP: 32,
                RESET: 0,
                SUBMIT: 0,
                TAB: 0,
                TABLIST: 0,
                TREE: 13,
                TREEITEM: 13
            }, w = {CHECKBOX: 1, OPTION: 1, RADIO: 1};
            var A = function () {
                this.o = this.i = null
            }, C = function (a, d) {
                var b = B;
                b.i = a;
                b.o = d;
                return b
            };
            A.prototype.k = function () {
                var a = this.i;
                this.i && this.i != this.o ? this.i = this.i.__owner || this.i.parentNode : this.i = null;
                return a
            };
            var G = function () {
                this.p = [];
                this.i = 0;
                this.o = null;
                this.s = !1
            };
            G.prototype.k = function () {
                if (this.s)return B.k();
                if (this.i != this.p.length) {
                    var a = this.p[this.i];
                    this.i++;
                    a != this.o && a && a.__owner && (this.s = !0, C(a.__owner, this.o));
                    return a
                }
                return null
            };
            var B = new A, H = new G;
            var I;
            a:{
                var J = g.navigator;
                if (J) {
                    var K = J.userAgent;
                    if (K) {
                        I = K;
                        break a
                    }
                }
                I = ""
            }
            var L = function (a) {
                return -1 != I.indexOf(a)
            };
            var M = function () {
                return L("Opera") || L("OPR")
            }, N = function () {
                return L("Edge") || L("Trident") || L("MSIE")
            }, O = function () {
                return (L("Chrome") || L("CriOS")) && !M() && !N()
            };
            var ha = M(), P = N(), ia = L("Gecko") && !(-1 != I.toLowerCase().indexOf("webkit") && !L("Edge")) && !(L("Trident") || L("MSIE")) && !L("Edge"), ja = -1 != I.toLowerCase().indexOf("webkit") && !L("Edge"), ka = function () {
                var a = I;
                if (ia)return /rv\:([^\);]+)(\)|;)/.exec(a);
                if (P && L("Edge"))return /Edge\/([\d\.]+)/.exec(a);
                if (P)return /\b(?:MSIE|rv)[:]([^\);]+)(\)|;)/.exec(a);
                if (ja)return /WebKit\/(\S+)/.exec(a)
            };
            (function () {
                if (ha && g.opera) {
                    var a = g.opera.version;
                    return "function" == aa(a) ? a() : a
                }
                var a = "", d = ka();
                d && (a = d ? d[1] : "");
                return P && !L("Edge") && (d = (d = g.document) ? d.documentMode : void 0, d > parseFloat(a)) ? String(d) : a
            })();
            !L("Android") || O() || L("Firefox") || M();
            O();
            var R = function () {
                this.B = [];
                this.i = [];
                this.k = [];
                this.s = {};
                this.o = null;
                this.p = [];
                Q(this, "_custom")
            }, la = "undefined" != typeof navigator && /iPhone|iPad|iPod/.test(navigator.userAgent), S = String.prototype.trim ? function (a) {
                return a.trim()
            } : function (a) {
                return a.replace(/^\s+/, "").replace(/\s+$/, "")
            }, ma = /\s*;\s*/, oa = function (a, d) {
                return function (b) {
                    var c = d;
                    if ("_custom" == c) {
                        c = b.detail;
                        if (!c || !c._type)return;
                        c = c._type
                    }
                    var e;
                    var f = c;
                    "click" == f && (v && b.metaKey || !v && b.ctrlKey || 2 == b.which || null == b.which && 4 == b.button || b.shiftKey) ? f = "clickmod" : fa(b) && (f = "clickkey");
                    var k = b.srcElement || b.target, c = T(f, b, k, "", null), m, q;
                    b.path ? (H.p = b.path, H.i = 0, H.o = this, H.s = !1, q = H) : q = C(k, this);
                    for (var r; r = q.k();) {
                        m = e = r;
                        r = f;
                        var n = m.__jsaction;
                        if (!n) {
                            var x = void 0, n = null;
                            "getAttribute"in m && (n = m.getAttribute("jsaction"));
                            if (x = n) {
                                n = l[x];
                                if (!n) {
                                    for (var n = {}, D = x.split(ma), E = 0, pa = D ? D.length : 0; E < pa; E++) {
                                        var t = D[E];
                                        if (t) {
                                            var F = t.indexOf(":"), V = -1 != F, qa = V ? S(t.substr(0, F)) : "click", t = V ? S(t.substr(F + 1)) : t;
                                            n[qa] = t
                                        }
                                    }
                                    l[x] = n
                                }
                                m.__jsaction = n
                            } else n = na, m.__jsaction = n
                        }
                        "clickkey" == r ? r = "click" : "click" != r || n.click || (r = "clickonly");
                        m = {v: r, action: n[r] || "", event: null, D: !1};
                        c = T(m.v, m.event || b, k, m.action || "", e, c.timeStamp);
                        if (m.D || m.action)break
                    }
                    c && "touchend" == c.eventType && (c.event._preventMouseEvents = ga);
                    if (m && m.action) {
                        if (k = "clickkey" == f)k = u(b), k = (k.type || k.tagName).toUpperCase(), (k = 32 == (b.which || b.keyCode ||
                        b.key) && "CHECKBOX" != k) || (q = u(b), k = (q.getAttribute("role") || q.tagName).toUpperCase(), q = q.type, k = "BUTTON" == k || !!q && !(q.toUpperCase()in w));
                        k && (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                        if ("mouseenter" == f || "mouseleave" == f)if (k = b.relatedTarget, !("mouseover" == b.type && "mouseenter" == f || "mouseout" == b.type && "mouseleave" == f) || k && (k === e || ba(e, k)))c.action = "", c.actionElement = null; else {
                            var f = {}, p;
                            for (p in b)"function" !== typeof b[p] && "srcElement" !== p && "target" !== p && (f[p] = b[p]);
                            f.type = "mouseover" == b.type ? "mouseenter" : "mouseleave";
                            f.target = f.srcElement = e;
                            f.bubbles = !1;
                            c.event = f;
                            c.targetElement = e
                        }
                    } else c.action = "", c.actionElement = null;
                    e = c;
                    a.o && (p = T(e.eventType, e.event, e.targetElement, e.action, e.actionElement, e.timeStamp), "clickonly" == p.eventType && (p.eventType = "click"), a.o(p, !0));
                    if (e.actionElement) {
                        "A" != e.actionElement.tagName || "click" != e.eventType && "clickmod" != e.eventType || (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                        if (a.o)a.o(e); else {
                            var y;
                            if ((p = g.document) && !p.createEvent && p.createEventObject)try {
                                y =
                                    p.createEventObject(b)
                            } catch (va) {
                                y = b
                            } else y = b;
                            e.event = y;
                            a.p.push(e)
                        }
                        if ("touchend" == e.event.type && e.event._mouseEventsPrevented) {
                            b = e.event;
                            for (var wa in b);
                            h()
                        }
                    }
                }
            }, T = function (a, d, b, c, e, f) {
                return {eventType: a, event: d, targetElement: b, action: c, actionElement: e, timeStamp: f || h()}
            }, na = {}, ra = function (a, d) {
                return function (b) {
                    var c = a, e = d, f = !1;
                    "mouseenter" == c ? c = "mouseover" : "mouseleave" == c && (c = "mouseout");
                    if (b.addEventListener) {
                        if ("focus" == c || "blur" == c || "error" == c || "load" == c)f = !0;
                        b.addEventListener(c, e, f)
                    } else b.attachEvent && ("focus" == c ? c = "focusin" : "blur" == c && (c = "focusout"), e = ca(b, e), b.attachEvent("on" + c, e));
                    return {v: c, w: e, C: f}
                }
            }, Q = function (a, d) {
                if (!a.s.hasOwnProperty(d)) {
                    var b = oa(a, d), c = ra(d, b);
                    a.s[d] = b;
                    a.B.push(c);
                    for (b = 0; b < a.i.length; ++b) {
                        var e = a.i[b];
                        e.k.push(c.call(null, e.i))
                    }
                    "click" == d && Q(a, "keydown")
                }
            };
            R.prototype.w = function (a) {
                return this.s[a]
            };
            var Y = function (a, d) {
                var b = new sa(d), c;
                a:{
                    for (c = 0; c < a.i.length; c++)if (U(a.i[c], d)) {
                        c = !0;
                        break a
                    }
                    c = !1
                }
                if (c)return a.k.push(b), b;
                W(a, b);
                a.i.push(b);
                X(a);
                return b
            }, X = function (a) {
                for (var d = a.k.concat(a.i), b = [], c = [], e = 0; e < a.i.length; ++e) {
                    var f = a.i[e];
                    ta(f, d) ? (b.push(f), ua(f)) : c.push(f)
                }
                for (e = 0; e < a.k.length; ++e)f = a.k[e], ta(f, d) ? b.push(f) : (c.push(f), W(a, f));
                a.i = c;
                a.k = b
            }, W = function (a, d) {
                var b = d.i;
                la && (b.style.cursor = "pointer");
                for (b = 0; b < a.B.length; ++b)d.k.push(a.B[b].call(null, d.i))
            }, sa = function (a) {
                this.i = a;
                this.k = []
            }, U = function (a, d) {
                for (var b = a.i, c = d; b != c && c.parentNode;)c = c.parentNode;
                return b == c
            }, ta = function (a, d) {
                for (var b = 0; b < d.length; ++b)if (d[b].i != a.i && U(d[b], a.i))return !0;
                return !1
            }, ua = function (a) {
                for (var d = 0; d < a.k.length; ++d) {
                    var b = a.i, c = a.k[d];
                    b.removeEventListener ? b.removeEventListener(c.v, c.w, c.C) : b.detachEvent && b.detachEvent("on" + c.v, c.w)
                }
                a.k = []
            };
            var Z = new R;
            Y(Z, window.document.documentElement);
            Q(Z, "click");
            Q(Z, "focus");
            Q(Z, "focusin");
            Q(Z, "blur");
            Q(Z, "focusout");
            Q(Z, "error");
            Q(Z, "load");
            Q(Z, "change");
            Q(Z, "dblclick");
            Q(Z, "input");
            Q(Z, "keyup");
            Q(Z, "keydown");
            Q(Z, "keypress");
            Q(Z, "mousedown");
            Q(Z, "mouseenter");
            Q(Z, "mouseleave");
            Q(Z, "mouseout");
            Q(Z, "mouseover");
            Q(Z, "mouseup");
            Q(Z, "touchstart");
            Q(Z, "touchend");
            Q(Z, "touchcancel");
            Q(Z, "speech");
            (function (a) {
                window.google.jsad = function (d) {
                    a.o = d;
                    a.p && (0 < a.p.length && d(a.p), a.p = null)
                };
                window.google.jsaac = function (d) {
                    return Y(a, d)
                };
                window.google.jsarc = function (d) {
                    ua(d);
                    for (var b = !1, c = 0; c < a.i.length; ++c)if (a.i[c] === d) {
                        a.i.splice(c, 1);
                        b = !0;
                        break
                    }
                    if (!b)for (c = 0; c < a.k.length; ++c)if (a.k[c] === d) {
                        a.k.splice(c, 1);
                        break
                    }
                    X(a)
                }
            })(Z);
        }).call(window);</script>
</head>
<body class="init">
<div id="prpd"></div>
<div class="h" id="mngb">
    <div id="gb"></div>
</div>
<span id="prt"></span>

<div class="init" id="lga"><img style="padding-top:112px" height="95" src="/images/srpr/logo11w.png" width="269"
                                alt="Google" id="hplogo" title="Google">

    <div id="logo-sub">Indonesia</div>
</div>
<form action="/search" id="f" method="get">
    <div id="hf"></div>
    <div class="init" id="fkbx">
        <div id="fkbx-text">Search Google or type URL</div>
        <input id="q" aria-hidden="true" autocomplete="off" name="q" tabindex="-1" type="url"
               jsaction="mousedown:ntp.fkbxclk">

        <div id="fkbx_crt"></div>
        <div id="fkbx-spch" tabindex="0"></div>
        <div id="fkbx-hspch" tabindex="0"></div>
        <div id="fkbx-hht">Say "Ok Google"</div>
        <div id="fkbx-tchm">
            <div id="fkbx-chme">
                <div class="_gSc"></div>
                <div>Not listening. Something went wrong.</div>
                <div><a href="#" id="fkbx-chmer" tabindex="1">Restart listening</a><a href="#" id="fkbx-chmed"
                                                                                      tabindex="1">Help</a></div>
            </div>
            <div id="fkbx-chmt">
                <div>Hotword detection is off.</div>
                <a href="#" id="fkbx-chmtr" tabindex="1">Start listening for "Ok Google"</a></div>
        </div>
        <div id="chw-o">
            <div class="_mSc">Say "Ok Google" to start a voice search.</div>
            <p class="_kSc">Search without lifting a finger. When you say "Ok Google", Chrome will search for what you
                say next.</p>

            <div><a href="https://support.google.com/chrome/?p=ui_hotword_search" target="_blank">Learn more</a>
                <button class="_dKb _k3" href="#" id="hotword__chw-on" jsaction="chw.optInNoThanksButtonClicked">No
                    thanks
                </button>
                <button class="_dKb _WW" href="#" id="hotword__chw-oe" jsaction="chw.optInEnableButtonClicked">Enable
                    "Ok Google"
                </button>
            </div>
        </div>
    </div>
</form>
<div class="spch s2fp-h" style="display:none" id="spch">
    <div class="spchc" id="spchc">
        <div class="_o3">
            <div class="_AM"><span class="_CMb" id="spchl"></span><span class="button" id="spchb"><div class="_wPb">
                        <span class="_AUb"></span>

                        <div class="_Fjd"><span class="_oXb"></span><span class="_dWb"></span></div>
                    </div></span></div>
            <div class="_gjb"><span class="spcht" id="spchi" style="color:#777"></span><span class="spcht" id="spchf"
                                                                                             style="color:#000"></span>
            </div>
            <div class="google-logo"></div>
        </div>
        <div class="_ypc">
            <div class="_zpc"></div>
        </div>
    </div>
    <div class="close-button" id="spchx">&times;</div>
</div>
<div class="mv-hide" id="most-visited">
    <div id="mv-tiles"></div>
    <div class="mv-noti-hide" id="mv-noti"><span id="mv-noti-msg">Thumbnail removed.</span>&nbsp;<span id="mv-noti-lks"><span
                id="mv-undo" tabindex="1">Undo</span>&nbsp;<span id="mv-restore" tabindex="1">Restore all</span>&nbsp;<div
                class="mv-x" id="mv-noti-x" tabindex="-1"></div></span></div>
    <div class="mv-noti-hide" id="mv-noti-error"><span id="mv-noti-msg">Error removing thumbnail; Chrome needs to be online.</span>
    </div>
</div>
<div id="prm-pt"><br>

    <div id="prm"></div>
</div>
<div id="theme-attr" style="display:none">
    <div id="theme-attr-msg">Theme created by</div>
</div>
<textarea name="csi" id="csi" style="display:none"></textarea>
<script>(function () {
        if (google.timers && google.timers.load.t) {
            var a = function () {
                google.timers && google.timers.load.t && (google.timers.load.t.ol = google.time(), google.csiReport && google.csiReport())
            };
            window.addEventListener ? window.addEventListener("load", a, !1) : window.attachEvent && window.attachEvent("onload", a);
            google.timers.load.t.prt = google.time()
        }
        ;
    })();</script>
<div id="xjsd"></div>
<div id="xjsi" data-jiis="bp">
    <script>(function () {
            function c(b) {
                window.setTimeout(function () {
                    var a = document.createElement("script");
                    a.src = b;
                    document.getElementById("xjsd").appendChild(a)
                }, 0)
            }

            google.dljp = function (b, a) {
                google.xjsu = b;
                c(a)
            };
            google.dlj = c;
        })();
        (function () {
            window.google.xjsrm = [];
        })();
        if (google.y)google.y.first = [];
        if (!google.xjs) {
            window._ = window._ || {};
            window._._DumpException = function (e) {
                throw e
            };
            if (google.timers && google.timers.load.t) {
                google.timers.load.t.xjsls = new Date().getTime();
            }
            google.dljp('/xjs/_/js/k\x3dxjs.ntp.en_US.X_Px2Hy8qCc.O/m\x3djsa,ntp,d,csi/rt\x3dj/d\x3d1/t\x3dzcms/rs\x3dACT90oHdymrD1NnogShHROVDCVCNZN8WnA', '/xjs/_/js/k\x3dxjs.ntp.en_US.X_Px2Hy8qCc.O/m\x3djsa,ntp,d,csi/rt\x3dj/d\x3d1/t\x3dzcms/rs\x3dACT90oHdymrD1NnogShHROVDCVCNZN8WnA');
            google.xjs = 1;
        }
        google.pmc = {
            "jsa": {},
            "ntp": {
                "ffb": false,
                "lang": "en-ID",
                "mvrt": "Don't show on this page",
                "stt": "Search by voice",
                "tc": {
                    "dnt": "Click to view today's doodle",
                    "tlh": 95,
                    "tlu": "/images/srpr/chrome_ntp_white_logo2.png",
                    "tlw": 269
                },
                "xid": 1
            },
            "spch": {
                "ae": "Please check your microphone.  \u003Ca href=\"https://support.google.com/chrome/?p=ui_voice_search\" target=\"_blank\"\u003ELearn more\u003C/a\u003E",
                "hen": true,
                "hl": "en-ID",
                "htt": "Listening for \"Ok Google\"",
                "im": "Click \u003Cb\u003EAllow\u003C/b\u003E to start voice search",
                "iw": "Waiting...",
                "lm": "Listening...",
                "lu": "%1$s voice search not available",
                "ne": "No Internet connection",
                "nt": "Didn't get that. \u003Cspan\u003ETry again\u003C/span\u003E",
                "nv": "Please check your microphone and audio levels.  \u003Ca href=\"https://support.google.com/chrome/?p=ui_voice_search\" target=\"_blank\"\u003ELearn more\u003C/a\u003E",
                "pe": "Voice search has been turned off.  \u003Ca href=\"https://support.google.com/chrome/?p=ui_voice_search\" target=\"_blank\"\u003EDetails\u003C/a\u003E",
                "rm": "Speak now"
            },
            "d": {},
            "csi": {"acsi": true}
        };
        google.y.first.push(function () {
            google.loadAll(['spch'].concat(google.xjsrm || []));
            if (google.med) {
                google.med('init');
                google.initHistory();
                google.med('history');
            }
        });
        if (google.j && google.j.en && google.j.xi) {
            window.setTimeout(google.j.xi, 0);
        }
    </script>
</div>
</body>
</html>