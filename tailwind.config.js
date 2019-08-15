module.exports = {
  theme: {
    extend: {
      spacing: {
        // base 14px
        '20px': '1.428rem',
        '25px': '1.785rem',
        '30px': '2.142rem',
        '40px': '2.857rem',
        '47px': '3.357rem',
        '69px': '4.928rem',
        '350px': '25rem',
      },
      flex: {
        '3': '3 2 0%',
      },
      width: {
        '35p': '35%',
        '65p': '65%',
        '68px': '4.857rem',
        '80px': '5.714rem',
        '120px': '8.571rem',
        '150px': '12.142rem',
        '160px': '11.428rem',
        '170px': '12.142rem',
        '185px': '13.214rem',
      },
      height: {
        '103px': '7.357rem'
      },
    },
    fontSize: {
      '14px': '1rem',
      '16px': '1.142rem',
      '18px': '1.285rem',
      '20px': '1.428rem',
      '22px': '1.571rem',
      '23px': '1.642rem',
      '30px': '2.142rem',
      '33px': '2.357rem',
    },
    colors: {
      white: '#fff',
      black: '#000',
      gray: {
        1: '#fafafa',
        2: '#b6b8bc',
        3: '#e7e7e7',
        4: '#303030',
        4: '#222222',
        5: '#6e7179',
        6: '#f2f2f2',
        7: '#a7a7a7',
        8: '#f3f3f3',
      },
      green: {
        1: '#33c700',
        2: '#f5faf6',
      },
      blue: {
        1: '#0372dd',
        2: '#007bff',
      },
      red: {
        1: '#f62424',
        2: '#fdf7f9',
      },
      yellow: {
        1: '#ffc720',
        2: '#ffd75f',
      },
    },
    minWidth: {
      '150px': '12.142rem',
    },
    maxWidth: {
      '120px': '8.571rem',
      '150px': '12.142rem',
      '294px': '21rem',
      '419px': '29.928rem',
      '868px': '62rem',
    },
  },
  variants: {},
  plugins: [
    require('tailwindcss-transitions')(),
  ],
  prefix: 'dp-',
  corePlugins: {
    container: false,
  }
}
