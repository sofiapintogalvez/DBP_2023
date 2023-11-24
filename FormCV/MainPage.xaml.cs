using System;
using Xamarin.Forms;

namespace FormCV
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        private async void OnSubmitClicked(object sender, EventArgs e)
        {
            var nombre = nombreEntry.Text;
            var apellido = apellidoEntry.Text;
            var ocupacion = ocupacionEntry.Text;
            var correo = correoEntry.Text;
            var telefono = telefonoEntry.Text;

            var CV = new CV(nombre, apellido, ocupacion, correo, telefono);
            await Navigation.PushAsync(CV); 
        }
    }
}
