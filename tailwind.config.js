module.exports = {
  theme: {
    extend: {
      spacing: {
        // base 14px
        '19px': '1.357rem',
        '20px': '1.428rem',
        '25px': '1.785rem',
        '26px': '1.857rem',
        '27px': '1.928rem',
        '30px': '2.142rem',
        '35px': '2.5rem',
        '40px': '2.857rem',
        '47px': '3.357rem',
        '53px': '3.785rem',
        '69px': '4.928rem',
        '98px': '7rem',
        '350px': '25rem',
      },
      flex: {
        '3': '3 2 0%',
      },
      width: {
        '35p': '35%',
        '65p': '65%',
        '60px': '4.285rem',
        '68px': '4.857rem',
        '80px': '5.714rem',
        '120px': '8.571rem',
        '126px': '9rem',
        '150px': '12.142rem',
        '160px': '11.428rem',
        '170px': '12.142rem',
        '185px': '13.214rem',
      },
      height: {
        '50px': '3.571rem',
        '103px': '7.357rem',
      },
      borderRadius: {
        '5px': '0.357rem',
      },
    },
    fontSize: {
      '10px': '0.714rem',
      '12px': '0.857rem',
      '13px': '0.928rem',
      '14px': '1rem',
      '16px': '1.142rem',
      '18px': '1.285rem',
      '19px': '1.357rem',
      '20px': '1.428rem',
      '22px': '1.571rem',
      '23px': '1.642rem',
      '24px': '1.714rem',
      '26px': '1.857rem',
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
        9: '#d1d1d1',
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
