module.exports = {
  'extends': 'stylelint-config-standard',
  'rules': {
    'no-empty-source': null,
    'indentation': 4,
    'string-quotes': 'single',
    'at-rule-no-unknown': [
      true,
      {
        'ignoreAtRules': [
          'extend',
          'at-root',
          'debug',
          'warn',
          'error',
          'if',
          'else',
          'for',
          'each',
          'while',
          'mixin',
          'include',
          'content',
          'return',
          'function',
          'tailwind',
          'apply',
          'responsive',
          'variants',
          'screen',
        ],
      },
    ],
  },
};
