# Only Styling with LESS!

LESS-Styler는 CSS 스타일링 작업을 도와주는 LESS 믹스인 라이브러리(LESS Mixin Library)이자 LESS 스타일링 시스템(LESS Styling System)입니다. 하나의 컬러로 다른 모든 컬러를 제어하는 LESS-Styler의 Color System으로 색채 설계의 아이디어도 얻을 수 있습니다.

<a align="center" href="http://kaldilab.com"><img width="100%" src="http://iiago.cdn2.cafe24.com/images/github.jpg" alt="Kaldi Lab - LESS Styler"></a>

> LESS Mixin Library & LESS Styling System `v1.0.4`

## LESS-Styler

LESS-Styler 모든 CSS 속성을 일정한 규칙에 의해 극단적으로 단순화시킨 믹스인을 호출하여 사용합니다. 최초 제작보다 유지보수에 더 초점을 맞춰 문자 한두 개만 수정하면 속성이 변경되도록 믹스인을 선언했습니다. 코딩 속도 향상에 도움이 될 것입니다.

## Color System

LESS-Styler는 색상 함수를 적극적으로 사용하여 컬러 하나로 웹사이트 전체의 컬러를 조절하고자 합니다. LESS-Styler의 색상 체계(Color System)는 컬러 선택에 대한 고민의 시간을 단축하고 더 효율적으로 컬러를 관리하기 위한 시스템이라 할 수 있습니다.

## Usage

**① Project (Folder)**

```sh
Your Project/
├── mixins/
│   ├── _mixins.less
│   └── ...
├── (img)
├── (css)
└── (less)
```

**② Import(*.less)**

```css
@import "(..)/mixins/_mixins.less";
```

① 다운로드 받은 파일들 중 'mixins' 폴더를 통째로 사용자의 프로젝트에 붙여넣기 합니다.<br>② 'mixins' 폴더 내의 '_mixins.less' 파일을 사용자의 스타일 less 파일 첫머리에 첨부(@import)합니다. 끝.

## Kaldi Lab

[Kaldi Lab](http://kaldilab.com/)의 LESS-Styler Website의 설명을 참고하세요.

- [LESS-Styler](http://kaldilab.com/less_styler/)
- [Color System](http://kaldilab.com/color_system/)
- [Palette](http://kaldilab.com/palette/)
- [Canvas](http://kaldilab.com/canvas/)